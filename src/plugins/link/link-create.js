var linkMenu,
    linkTypes,
    linkContent,
    linkAttributes;

Raptor.registerUi(new DialogToggleButton({
    name: 'linkCreate',
    dialogOptions: {
        width: 850
    },

    applyAction: function() {
        this.raptor.actionApply(function() {
            selectionExpandToWord();
            var applier = rangy.createApplier({
                tag: 'a',
                attributes: linkAttributes
            });
            if (linkAttributes !== false && $.trim(linkAttributes.href) !== '') {
                applier.applyToSelection();
                cleanEmptyElements(this.raptor.getElement(), ['a']);
            }
        }.bind(this));
    },

    validateDialog: function() {
        var index = linkMenu.find(':radio:checked').val(),
            linkType = linkTypes[index];
        linkAttributes = linkType.getAttributes(linkContent.children('div:eq(' + index + ')'));
        return linkAttributes !== false;
    },

    selectionToggle: function() {
        var applier = rangy.createApplier({
            tag: 'a'
        });
        return applier.isAppliedToSelection();
    },

    getDialogTemplate: function() {
        var template = $(this.raptor.getTemplate('link.dialog', this.options));

        linkMenu = template.find('[data-menu]');
        linkContent = template.find('[data-content]');
        linkTypes = [
            new LinkTypeInternal(this.raptor),
            new LinkTypeExternal(this.raptor),
            new LinkTypeEmail(this.raptor)
        ];

        for (var i = 0, l = linkTypes.length; i < l; i++) {
            $(this.raptor.getTemplate('link.label', linkTypes[i]))
                .click(function() {
                    linkContent.children('div').hide();
                    linkContent.children('div:eq(' + $(this).index() + ')').show();
                })
                .find(':radio')
                    .val(i)
                .end()
                .appendTo(linkMenu);
            $('<div>')
                .append(linkTypes[i].getContent())
                .hide()
                .appendTo(linkContent);
        }
        linkMenu.find(':radio:first').prop('checked', true);
        linkContent.children('div:first').show();

        return template;
    }
}));
