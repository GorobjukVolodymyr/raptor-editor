<!-- Libraries -->
<script type="text/javascript">
    if (typeof jQuery === 'undefined') {
        document.write('<script type="text/javascript" src="<?= RAPTOR_EDITOR_URI; ?>src/dependencies/jquery.js"><' + '/script>');
    }
</script>
<script type="text/javascript">
    if (typeof jQuery.ui === 'undefined') {
        document.write('<script type="text/javascript" src="<?= RAPTOR_EDITOR_URI; ?>src/dependencies/jquery-ui.js"><' + '/script>');
//        document.write('<link rel="stylesheet" href="<?= RAPTOR_EDITOR_URI; ?>src/dependencies/themes/aristo/jquery-ui.css"/>');
//        document.write('<link rel="stylesheet" href="<?= RAPTOR_EDITOR_URI; ?>src/dependencies/themes/smoothness/jquery-ui.css"/>');
//        document.write('<link rel="stylesheet" href="<?= RAPTOR_EDITOR_URI; ?>src/dependencies/themes/redmond/jquery-ui.css"/>');
        document.write('<link rel="stylesheet" type="text/css" href="<?= RAPTOR_EDITOR_URI; ?>src/dependencies/themes/mammoth/theme.css" />');
        document.write('<link rel="stylesheet" type="text/css" href="<?= RAPTOR_EDITOR_URI; ?>src/dependencies/themes/mammoth/theme-icons.css" />');
    }
</script>
<script type="text/javascript" src="<?= RAPTOR_EDITOR_URI; ?>src/dependencies/jquery-hotkeys.js"></script>
<script type="text/javascript" src="<?= RAPTOR_EDITOR_URI; ?>src/dependencies/rangy/rangy-core.js"></script>
<script type="text/javascript" src="<?= RAPTOR_EDITOR_URI; ?>src/dependencies/rangy/rangy-serializer.js"></script>
<script type="text/javascript" src="<?= RAPTOR_EDITOR_URI; ?>src/dependencies/rangy/rangy-applier.js"></script>
<script type="text/javascript" src="<?= RAPTOR_EDITOR_URI; ?>src/dependencies/rangy/rangy-cssclassapplier.js"></script>
<script type="text/javascript" src="<?= RAPTOR_EDITOR_URI; ?>src/dependencies/rangy/rangy-selectionsaverestore.js"></script>
<script type="text/javascript" src="<?= RAPTOR_EDITOR_URI; ?>src/dependencies/rangy/rangy-textrange.js"></script>

<script type="text/javascript" src="<?= RAPTOR_EDITOR_URI; ?>src/dependencies/resizetable.js"></script>
<script type="text/javascript" src="<?= RAPTOR_EDITOR_URI; ?>src/dependencies/diff.js"></script>
<script type="text/javascript" src="<?= RAPTOR_EDITOR_URI; ?>src/dependencies/goog-table.js"></script>

<!-- Theme -->
<link rel="stylesheet" type="text/css" href="<?= RAPTOR_PACKAGES_URI; ?>raptor.css"/>
<link rel="stylesheet" type="text/css" href="<?= RAPTOR_PACKAGES_URI; ?>raptor-front-end.css"/>

<!-- Editor -->
<script type="text/javascript" src="<?= RAPTOR_EDITOR_URI; ?>src/adapters/jquery-ui.js"></script>
<script type="text/javascript" src="<?= RAPTOR_EDITOR_URI; ?>src/i18n.js"></script>
<script type="text/javascript" src="<?= RAPTOR_EDITOR_URI; ?>src/locales/en.js"></script>
<script type="text/javascript" src="<?= RAPTOR_EDITOR_URI; ?>src/locales/de.js"></script>
<script type="text/javascript" src="<?= RAPTOR_EDITOR_URI; ?>src/locales/es.js"></script>
<script type="text/javascript" src="<?= RAPTOR_EDITOR_URI; ?>src/locales/fr.js"></script>
<script type="text/javascript" src="<?= RAPTOR_EDITOR_URI; ?>src/locales/nl.js"></script>
<script type="text/javascript" src="<?= RAPTOR_EDITOR_URI; ?>src/locales/ru.js"></script>
<script type="text/javascript" src="<?= RAPTOR_EDITOR_URI; ?>src/locales/sv.js"></script>
<script type="text/javascript" src="<?= RAPTOR_EDITOR_URI; ?>src/locales/zh-CN.js"></script>
<script type="text/javascript" src="<?= RAPTOR_EDITOR_URI; ?>src/init.js"></script>
<script type="text/javascript" src="<?= RAPTOR_EDITOR_URI; ?>src/support.js"></script>
<script type="text/javascript" src="<?= RAPTOR_EDITOR_URI; ?>src/tools/action.js"></script>
<script type="text/javascript" src="<?= RAPTOR_EDITOR_URI; ?>src/tools/clean.js"></script>
<script type="text/javascript" src="<?= RAPTOR_EDITOR_URI; ?>src/tools/dock.js"></script>
<script type="text/javascript" src="<?= RAPTOR_EDITOR_URI; ?>src/tools/element.js"></script>
<script type="text/javascript" src="<?= RAPTOR_EDITOR_URI; ?>src/tools/fragment.js"></script>
<script type="text/javascript" src="<?= RAPTOR_EDITOR_URI; ?>src/tools/list.js"></script>
<script type="text/javascript" src="<?= RAPTOR_EDITOR_URI; ?>src/tools/node.js"></script>
<script type="text/javascript" src="<?= RAPTOR_EDITOR_URI; ?>src/tools/persist.js"></script>
<script type="text/javascript" src="<?= RAPTOR_EDITOR_URI; ?>src/tools/range.js"></script>
<script type="text/javascript" src="<?= RAPTOR_EDITOR_URI; ?>src/tools/selection.js"></script>
<script type="text/javascript" src="<?= RAPTOR_EDITOR_URI; ?>src/tools/string.js"></script>
<script type="text/javascript" src="<?= RAPTOR_EDITOR_URI; ?>src/tools/state.js"></script>
<script type="text/javascript" src="<?= RAPTOR_EDITOR_URI; ?>src/tools/style.js"></script>
<script type="text/javascript" src="<?= RAPTOR_EDITOR_URI; ?>src/tools/table.js"></script>
<script type="text/javascript" src="<?= RAPTOR_EDITOR_URI; ?>src/tools/template.js"></script>
<script type="text/javascript" src="<?= RAPTOR_EDITOR_URI; ?>src/tools/types.js"></script>
<script type="text/javascript" src="<?= RAPTOR_EDITOR_URI; ?>src/raptor.js"></script>
<script type="text/javascript" src="<?= RAPTOR_EDITOR_URI; ?>src/raptor-widget.js"></script>
<script type="text/javascript" src="<?= RAPTOR_EDITOR_URI; ?>src/components/plugin.js"></script>
<script type="text/javascript" src="<?= RAPTOR_EDITOR_URI; ?>src/components/layout.js"></script>
<script type="text/javascript" src="<?= RAPTOR_EDITOR_URI; ?>src/components/ui/button.js"></script>
<script type="text/javascript" src="<?= RAPTOR_EDITOR_URI; ?>src/components/ui/preview-button.js"></script>
<script type="text/javascript" src="<?= RAPTOR_EDITOR_URI; ?>src/components/ui/preview-toggle-button.js"></script>
<script type="text/javascript" src="<?= RAPTOR_EDITOR_URI; ?>src/components/ui/toggle-button.js"></script>
<script type="text/javascript" src="<?= RAPTOR_EDITOR_URI; ?>src/components/ui/dialog-button.js"></script>
<script type="text/javascript" src="<?= RAPTOR_EDITOR_URI; ?>src/components/ui/dialog-toggle-button.js"></script>
<script type="text/javascript" src="<?= RAPTOR_EDITOR_URI; ?>src/components/ui/filtered-preview-button.js"></script>
<script type="text/javascript" src="<?= RAPTOR_EDITOR_URI; ?>src/components/ui/css-class-applier-button.js"></script>
<script type="text/javascript" src="<?= RAPTOR_EDITOR_URI; ?>src/components/ui/menu-button.js"></script>
<script type="text/javascript" src="<?= RAPTOR_EDITOR_URI; ?>src/components/ui/menu.js"></script>
<script type="text/javascript" src="<?= RAPTOR_EDITOR_URI; ?>src/components/ui/select-menu.js"></script>
<script type="text/javascript" src="<?= RAPTOR_EDITOR_URI; ?>src/components/ui/custom-menu.js"></script>
<script type="text/javascript" src="<?= RAPTOR_EDITOR_URI; ?>src/components/layout/ui-group.js"></script>
<script type="text/javascript" src="<?= RAPTOR_EDITOR_URI; ?>src/components/layout/messages.js"></script>
<script type="text/javascript" src="<?= RAPTOR_EDITOR_URI; ?>src/components/layout/toolbar.js"></script>
<script type="text/javascript" src="<?= RAPTOR_EDITOR_URI; ?>src/components/layout/hover-panel.js"></script>

<!-- Main templates -->
<script type="text/javascript">templateRegister('message', '<?= RAPTOR_EDITOR_URI; ?>src/templates/message.html');</script>
<script type="text/javascript">templateRegister('messages', '<?= RAPTOR_EDITOR_URI; ?>src/templates/messages.html');</script>
<script type="text/javascript">templateRegister('unsupported', '<?= RAPTOR_EDITOR_URI; ?>src/templates/unsupported.html');</script>

<!-- Preset -->
<script type="text/javascript" src="<?= RAPTOR_EDITOR_URI; ?>src/presets/base.js"></script>
<script type="text/javascript" src="<?= RAPTOR_EDITOR_URI; ?>src/presets/full.js"></script>
<script type="text/javascript" src="<?= RAPTOR_EDITOR_URI; ?>src/presets/micro.js"></script>

<!-- Plugins -->
<script type="text/javascript" src="<?= RAPTOR_EDITOR_URI; ?>src/plugins/cancel/cancel.js"></script>

<script type="text/javascript" src="<?= RAPTOR_EDITOR_URI; ?>src/plugins/class-menu/class-menu.js"></script>
<script type="text/javascript">templateRegister('class-menu.item', '<?= RAPTOR_EDITOR_URI; ?>src/plugins/class-menu/templates/item.html');</script>

<script type="text/javascript" src="<?= RAPTOR_EDITOR_URI; ?>src/plugins/clear-formatting/clear-formatting.js"></script>

<script type="text/javascript" src="<?= RAPTOR_EDITOR_URI; ?>src/plugins/click-button-to-edit/click-button-to-edit.js"></script>
<script type="text/javascript">templateRegister('click-button-to-edit.button', '<?= RAPTOR_EDITOR_URI; ?>src/plugins/click-button-to-edit/templates/button.html');</script>

<script type="text/javascript" src="<?= RAPTOR_EDITOR_URI; ?>src/plugins/color-menu-basic/color-menu-basic.js"></script>
<script type="text/javascript">templateRegister('color-menu-basic.menu', '<?= RAPTOR_EDITOR_URI; ?>src/plugins/color-menu-basic/templates/menu.html');</script>

<script type="text/javascript" src="<?= RAPTOR_EDITOR_URI; ?>src/plugins/dock/dock-plugin.js"></script>
<script type="text/javascript" src="<?= RAPTOR_EDITOR_URI; ?>src/plugins/dock/dock-to-screen.js"></script>
<script type="text/javascript" src="<?= RAPTOR_EDITOR_URI; ?>src/plugins/dock/dock-to-element.js"></script>

<script type="text/javascript" src="<?= RAPTOR_EDITOR_URI; ?>src/plugins/embed/embed.js"></script>
<script type="text/javascript">templateRegister('embed.dialog', '<?= RAPTOR_EDITOR_URI; ?>src/plugins/embed/templates/dialog.html');</script>

<script type="text/javascript" src="<?= RAPTOR_EDITOR_URI; ?>src/plugins/float/float-left.js"></script>
<script type="text/javascript" src="<?= RAPTOR_EDITOR_URI; ?>src/plugins/float/float-none.js"></script>
<script type="text/javascript" src="<?= RAPTOR_EDITOR_URI; ?>src/plugins/float/float-right.js"></script>

<script type="text/javascript" src="<?= RAPTOR_EDITOR_URI; ?>src/plugins/guides/guides.js"></script>

<script type="text/javascript" src="<?= RAPTOR_EDITOR_URI; ?>src/plugins/history/history-redo.js"></script>
<script type="text/javascript" src="<?= RAPTOR_EDITOR_URI; ?>src/plugins/history/history-undo.js"></script>

<script type="text/javascript" src="<?= RAPTOR_EDITOR_URI; ?>src/plugins/hr/hr-create.js"></script>

<script type="text/javascript" src="<?= RAPTOR_EDITOR_URI; ?>src/plugins/insert-file/insert-file.js"></script>
<script type="text/javascript">templateRegister('insert-file.dialog', '<?= RAPTOR_EDITOR_URI; ?>src/plugins/insert-file/templates/dialog.html');</script>

<script type="text/javascript" src="<?= RAPTOR_EDITOR_URI; ?>src/plugins/image-resize-button/image-resize-button.js"></script>
<script type="text/javascript">templateRegister('image-resize-button.button', '<?= RAPTOR_EDITOR_URI; ?>src/plugins/image-resize-button/templates/button.html');</script>
<script type="text/javascript">templateRegister('image-resize-button.dialog', '<?= RAPTOR_EDITOR_URI; ?>src/plugins/image-resize-button/templates/dialog.html');</script>

<script type="text/javascript" src="<?= RAPTOR_EDITOR_URI; ?>src/plugins/language-menu/language-menu.js"></script>
<script type="text/javascript">templateRegister('language-menu.item', '<?= RAPTOR_EDITOR_URI; ?>src/plugins/language-menu/templates/item.html');</script>

<script type="text/javascript" src="<?= RAPTOR_EDITOR_URI; ?>src/plugins/link/link-create.js"></script>
<script type="text/javascript" src="<?= RAPTOR_EDITOR_URI; ?>src/plugins/link/link-remove.js"></script>
<script type="text/javascript" src="<?= RAPTOR_EDITOR_URI; ?>src/plugins/link/link-type-email.js"></script>
<script type="text/javascript" src="<?= RAPTOR_EDITOR_URI; ?>src/plugins/link/link-type-external.js"></script>
<script type="text/javascript" src="<?= RAPTOR_EDITOR_URI; ?>src/plugins/link/link-type-document.js"></script>
<script type="text/javascript" src="<?= RAPTOR_EDITOR_URI; ?>src/plugins/link/link-type-internal.js"></script>
<script type="text/javascript">templateRegister('link.dialog', '<?= RAPTOR_EDITOR_URI; ?>src/plugins/link/templates/dialog.html');</script>
<script type="text/javascript">templateRegister('link.document', '<?= RAPTOR_EDITOR_URI; ?>src/plugins/link/templates/document.html');</script>
<script type="text/javascript">templateRegister('link.email', '<?= RAPTOR_EDITOR_URI; ?>src/plugins/link/templates/email.html');</script>
<script type="text/javascript">templateRegister('link.error', '<?= RAPTOR_EDITOR_URI; ?>src/plugins/link/templates/error.html');</script>
<script type="text/javascript">templateRegister('link.external', '<?= RAPTOR_EDITOR_URI; ?>src/plugins/link/templates/external.html');</script>
<script type="text/javascript">templateRegister('link.file-url', '<?= RAPTOR_EDITOR_URI; ?>src/plugins/link/templates/file-url.html');</script>
<script type="text/javascript">templateRegister('link.internal', '<?= RAPTOR_EDITOR_URI; ?>src/plugins/link/templates/internal.html');</script>
<script type="text/javascript">templateRegister('link.label', '<?= RAPTOR_EDITOR_URI; ?>src/plugins/link/templates/label.html');</script>

<script type="text/javascript" src="<?= RAPTOR_EDITOR_URI; ?>src/plugins/list/list-ordered.js"></script>
<script type="text/javascript" src="<?= RAPTOR_EDITOR_URI; ?>src/plugins/list/list-unordered.js"></script>

<script type="text/javascript" src="<?= RAPTOR_EDITOR_URI; ?>src/plugins/logo/logo.js"></script>

<script type="text/javascript" src="<?= RAPTOR_EDITOR_URI; ?>src/plugins/normalise-line-breaks/normalise-line-breaks.js"></script>
<script type="text/javascript" src="<?= RAPTOR_EDITOR_URI; ?>src/plugins/no-break/no-break.js"></script>

<script type="text/javascript" src="<?= RAPTOR_EDITOR_URI; ?>src/plugins/paste/paste.js"></script>
<script type="text/javascript">templateRegister('paste.dialog', '<?= RAPTOR_EDITOR_URI; ?>src/plugins/paste/templates/dialog.html');</script>

<script type="text/javascript" src="<?= RAPTOR_EDITOR_URI; ?>src/plugins/placeholder/placeholder.js"></script>

<script type="text/javascript" src="<?= RAPTOR_EDITOR_URI; ?>src/plugins/save/save.js"></script>
<script type="text/javascript" src="<?= RAPTOR_EDITOR_URI; ?>src/plugins/save/save-json.js"></script>
<script type="text/javascript" src="<?= RAPTOR_EDITOR_URI; ?>src/plugins/save/save-rest.js"></script>

<script type="text/javascript" src="<?= RAPTOR_EDITOR_URI; ?>src/plugins/snippet-menu/snippet-menu.js"></script>
<script type="text/javascript">templateRegister('snippet-menu.item', '<?= RAPTOR_EDITOR_URI; ?>src/plugins/snippet-menu/templates/item.html');</script>

<script type="text/javascript" src="<?= RAPTOR_EDITOR_URI; ?>src/plugins/special-characters/special-characters.js"></script>
<script type="text/javascript">templateRegister('special-characters.dialog', '<?= RAPTOR_EDITOR_URI; ?>src/plugins/special-characters/templates/dialog.html');</script>
<script type="text/javascript">templateRegister('special-characters.tab-button', '<?= RAPTOR_EDITOR_URI; ?>src/plugins/special-characters/templates/tab-button.html');</script>
<script type="text/javascript">templateRegister('special-characters.tab-content', '<?= RAPTOR_EDITOR_URI; ?>src/plugins/special-characters/templates/tab-content.html');</script>
<script type="text/javascript">templateRegister('special-characters.tab-li', '<?= RAPTOR_EDITOR_URI; ?>src/plugins/special-characters/templates/tab-li.html');</script>

<script type="text/javascript" src="<?= RAPTOR_EDITOR_URI; ?>src/plugins/statistics/statistics.js"></script>
<script type="text/javascript">templateRegister('statistics.dialog', '<?= RAPTOR_EDITOR_URI; ?>src/plugins/statistics/templates/dialog.html');</script>

<script type="text/javascript" src="<?= RAPTOR_EDITOR_URI; ?>src/plugins/table/table-cell-button.js"></script>
<script type="text/javascript" src="<?= RAPTOR_EDITOR_URI; ?>src/plugins/table/table-create.js"></script>
<script type="text/javascript" src="<?= RAPTOR_EDITOR_URI; ?>src/plugins/table/table-delete-column.js"></script>
<script type="text/javascript" src="<?= RAPTOR_EDITOR_URI; ?>src/plugins/table/table-delete-row.js"></script>
<script type="text/javascript" src="<?= RAPTOR_EDITOR_URI; ?>src/plugins/table/table-insert-column.js"></script>
<script type="text/javascript" src="<?= RAPTOR_EDITOR_URI; ?>src/plugins/table/table-insert-row.js"></script>
<script type="text/javascript" src="<?= RAPTOR_EDITOR_URI; ?>src/plugins/table/table-merge-cells.js"></script>
<script type="text/javascript" src="<?= RAPTOR_EDITOR_URI; ?>src/plugins/table/table-split-cells.js"></script>
<script type="text/javascript" src="<?= RAPTOR_EDITOR_URI; ?>src/plugins/table/table-support.js"></script>
<script type="text/javascript">templateRegister('table.create-menu', '<?= RAPTOR_EDITOR_URI; ?>src/plugins/table/templates/create-menu.html');</script>

<script type="text/javascript" src="<?= RAPTOR_EDITOR_URI; ?>src/plugins/tag-menu/tag-menu.js"></script>
<script type="text/javascript">templateRegister('tag-menu.menu', '<?= RAPTOR_EDITOR_URI; ?>src/plugins/tag-menu/templates/menu.html');</script>

<script type="text/javascript" src="<?= RAPTOR_EDITOR_URI; ?>src/plugins/text-align/text-align-button.js"></script>
<script type="text/javascript" src="<?= RAPTOR_EDITOR_URI; ?>src/plugins/text-align/left.js"></script>
<script type="text/javascript" src="<?= RAPTOR_EDITOR_URI; ?>src/plugins/text-align/right.js"></script>
<script type="text/javascript" src="<?= RAPTOR_EDITOR_URI; ?>src/plugins/text-align/center.js"></script>
<script type="text/javascript" src="<?= RAPTOR_EDITOR_URI; ?>src/plugins/text-align/justify.js"></script>

<script type="text/javascript" src="<?= RAPTOR_EDITOR_URI; ?>src/plugins/text-style/bold.js"></script>
<script type="text/javascript" src="<?= RAPTOR_EDITOR_URI; ?>src/plugins/text-style/block-quote.js"></script>
<script type="text/javascript" src="<?= RAPTOR_EDITOR_URI; ?>src/plugins/text-style/italic.js"></script>
<script type="text/javascript" src="<?= RAPTOR_EDITOR_URI; ?>src/plugins/text-style/size-decrease.js"></script>
<script type="text/javascript" src="<?= RAPTOR_EDITOR_URI; ?>src/plugins/text-style/size-increase.js"></script>
<script type="text/javascript" src="<?= RAPTOR_EDITOR_URI; ?>src/plugins/text-style/strike.js"></script>
<script type="text/javascript" src="<?= RAPTOR_EDITOR_URI; ?>src/plugins/text-style/sub.js"></script>
<script type="text/javascript" src="<?= RAPTOR_EDITOR_URI; ?>src/plugins/text-style/super.js"></script>
<script type="text/javascript" src="<?= RAPTOR_EDITOR_URI; ?>src/plugins/text-style/underline.js"></script>

<script type="text/javascript" src="<?= RAPTOR_EDITOR_URI; ?>src/plugins/tool-tip/tool-tip.js"></script>

<script type="text/javascript" src="<?= RAPTOR_EDITOR_URI; ?>src/plugins/unsaved-edit-warning/unsaved-edit-warning.js"></script>
<script type="text/javascript">templateRegister('view-source.dialog', '<?= RAPTOR_EDITOR_URI; ?>src/plugins/view-source/templates/dialog.html');</script>
<script type="text/javascript">templateRegister('unsaved-edit-warning.warning', '<?= RAPTOR_EDITOR_URI; ?>src/plugins/unsaved-edit-warning/templates/warning.html');</script>

<script type="text/javascript" src="<?= RAPTOR_EDITOR_URI; ?>src/plugins/view-source/view-source.js"></script>

<script type="text/javascript" src="<?= RAPTOR_EDITOR_URI; ?>src/expose.js"></script>
