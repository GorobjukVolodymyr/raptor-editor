<!doctype html>
<html>
<head>
    <script type="text/javascript" src="../../js/case.js"></script>
    <?php $uri = '../../../src/'; include __DIR__ . '/../../../src/include.php'; ?>
</head>
<body class="simple">
    <script type="text/javascript">
        rangy.init();
    </script>
    <div class="test-1">
        <h1>Unordered List 1: Create an unordered list from group of words</h1>
        <div class="test-input">
            <div class="editible">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas
                    convallis {dui id erat pellentesque et rhoncus} nunc semper. Suspendisse
                    malesuada hendrerit velit nec tristique. Aliquam gravida mauris at
                    ligula venenatis rhoncus. Suspendisse interdum, nisi nec consectetur
                    pulvinar, lorem augue ornare felis, vel lacinia erat nibh in velit.
                </p>
            </div>
        </div>
        <div class="test-expected">
            <div class="editible">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas
                    convallis
                </p>
                <ul>
                    <li>{dui id erat pellentesque et rhoncus}</li>
                </ul>
                <p>
                    nunc semper. Suspendisse
                    malesuada hendrerit velit nec tristique. Aliquam gravida mauris at
                    ligula venenatis rhoncus. Suspendisse interdum, nisi nec consectetur
                    pulvinar, lorem augue ornare felis, vel lacinia erat nibh in velit.
                </p>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        testEditor('.test-1', function(input) {
            var unorderedListButton = getLayoutElement(input).find('.raptor-ui-list-unordered');
            unorderedListButton.trigger('click');
            rangesToTokens(rangy.getSelection().getAllRanges());

            if (!unorderedListButton.is('.ui-state-highlight')){
                throw new Error('Button is not active');
            }
        });
    </script>

    <div class="test-2">
        <h1>Unordered List 2: Create an unordered list from single word</h1>
        <div class="test-input">
            <div class="editible">
                <p>
                    Lorem ipsum dolor sit amet, {consectetur} adipiscing elit. Maecenas
                    convallis dui id erat pellentesque et rhoncus nunc semper. Suspendisse
                    malesuada hendrerit velit nec tristique. Aliquam gravida mauris at
                    ligula venenatis rhoncus. Suspendisse interdum, nisi nec consectetur
                    pulvinar, lorem augue ornare felis, vel lacinia erat nibh in velit.
                </p>
            </div>
        </div>
        <div class="test-expected">
            <div class="editible">
                <p>
                   Lorem ipsum dolor sit amet,
                </p>
                <ul>
                    <li>{consectetur}</li>
                </ul>
                <p>
                    adipiscing elit. Maecenas
                    convallis dui id erat pellentesque et rhoncus nunc semper. Suspendisse
                    malesuada hendrerit velit nec tristique. Aliquam gravida mauris at
                    ligula venenatis rhoncus. Suspendisse interdum, nisi nec consectetur
                    pulvinar, lorem augue ornare felis, vel lacinia erat nibh in velit.
                </p>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        testEditor('.test-2', function(input) {
            var unorderedListButton = getLayoutElement(input).find('.raptor-ui-list-unordered');
            unorderedListButton.trigger('click');
            rangesToTokens(rangy.getSelection().getAllRanges());

            if (!unorderedListButton.is('.ui-state-highlight')){
                throw new Error('Button is not active');
            }
        });
    </script>


    <div class="test-3">
        <h1>Unordered List 3: Create an unordered list from empty selection before a word</h1>
        <div class="test-input">
            <div class="editible">
                <p>
                    Lorem ipsum dolor sit amet, {}consectetur adipiscing elit. Maecenas
                    convallis dui id erat pellentesque et rhoncus nunc semper. Suspendisse
                    malesuada hendrerit velit nec tristique. Aliquam gravida mauris at
                    ligula venenatis rhoncus. Suspendisse interdum, nisi nec consectetur
                    pulvinar, lorem augue ornare felis, vel lacinia erat nibh in velit.
                </p>
            </div>
        </div>
        <div class="test-expected">
            <div class="editible">
                <ul>
                    <li>Lorem ipsum dolor sit amet, {}consectetur adipiscing elit. Maecenas
                    convallis dui id erat pellentesque et rhoncus nunc semper. Suspendisse
                    malesuada hendrerit velit nec tristique. Aliquam gravida mauris at
                    ligula venenatis rhoncus. Suspendisse interdum, nisi nec consectetur
                    pulvinar, lorem augue ornare felis, vel lacinia erat nibh in velit.</li>
                </ul>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        testEditor('.test-3', function(input) {
            var unorderedListButton = getLayoutElement(input).find('.raptor-ui-list-unordered');
            unorderedListButton.trigger('click');
            rangesToTokens(rangy.getSelection().getAllRanges());

            if (!unorderedListButton.is('.ui-state-highlight')){
                throw new Error('Button is not active');
            }
        });
    </script>

    <div class="test-4">
        <h1>Unordered List 4: Create an unordered list from empty selection inside a word</h1>
        <div class="test-input">
            <div class="editible">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas
                    convallis dui id erat pellentesque et rhoncus nunc semper. Suspendisse
                    malesuada hendr{}erit velit nec tristique. Aliquam gravida mauris at
                    ligula venenatis rhoncus. Suspendisse interdum, nisi nec consectetur
                    pulvinar, lorem augue ornare felis, vel lacinia erat nibh in velit.
                </p>
            </div>
        </div>
        <div class="test-expected">
            <div class="editible">
                <ul>
                    <li> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas
                    convallis dui id erat pellentesque et rhoncus nunc semper. Suspendisse
                    malesuada hendr{}erit velit nec tristique. Aliquam gravida mauris at
                    ligula venenatis rhoncus. Suspendisse interdum, nisi nec consectetur
                    pulvinar, lorem augue ornare felis, vel lacinia erat nibh in velit.</li>
                </ul>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        testEditor('.test-4', function(input) {
            var unorderedListButton = getLayoutElement(input).find('.raptor-ui-list-unordered');
            unorderedListButton.trigger('click');
            rangesToTokens(rangy.getSelection().getAllRanges());

            if (!unorderedListButton.is('.ui-state-highlight')){
                throw new Error('Button is not active');
            }
        });
    </script>

    <div class="test-5">
       <h1>Unordered List 5: Create an unordered list with multiple items selection from part word to part word</h1>
        <div class="test-input">
            <div class="editible">
                  <p>Lor{em ipsum dolor sit amet, consectetur adipiscing elit.</p>
                  <p>Maecenas convallis dui id erat pellentesque et rhoncus nunc semper.</p>
                  <p>Suspendisse malesuada hendrerit velit nec tristique.</p>
                  <p>Aliquam gravida mauris at ligula venenatis rhonc}us.</p>
            </div>
        </div>
        <div class="test-expected">
            <div class="editible">
                <p>Lor</p>
                <ul>
                    <li>{em ipsum dolor sit amet, consectetur adipiscing elit.</li>
                    <li>Maecenas convallis dui id erat pellentesque et rhoncus nunc semper.</li>
                    <li>Suspendisse malesuada hendrerit velit nec tristique.</li>
                    <li>Aliquam gravida mauris at ligula venenatis rhonc}</li>
                </ul>
                <p>us.</p>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        testEditor('.test-5', function(input) {
            var unorderedListButton = getLayoutElement(input).find('.raptor-ui-list-unordered');
            unorderedListButton.trigger('click');
            rangesToTokens(rangy.getSelection().getAllRanges());

            if (!unorderedListButton.is('.ui-state-highlight')){
                throw new Error('Button is not active');
            }
        });
    </script>

    <div class="test-6">
        <h1>Unordered List 6: Create an unordered list with multiple items</h1>
        <div class="test-input">
            <div class="editible">
                {
                    <p>Item 1</p>
                    <p>Item 2</p>
                    <p>Item 3</p>
                    <p>Item 4</p>
                }
            </div>
        </div>
        <div class="test-expected">
            <div class="editible">
                <ul>{
                    <li>Item 1</li>
                    <li>Item 2</li>
                    <li>Item 3</li>
                    <li>Item 4</li>
                    }
                </ul>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        testEditor('.test-6', function(input) {
            var unorderedListButton = getLayoutElement(input).find('.raptor-ui-list-unordered');
            unorderedListButton.trigger('click');
            rangesToTokens(rangy.getSelection().getAllRanges());

            if (!unorderedListButton.is('.ui-state-highlight')){
                throw new Error('Button is not active');
            }
        });
    </script>

    <div class="test-7">
        <h1>Unordered List 7: Create an unordered list with multiple heading items</h1>
        <div class="test-input">
            <div class="editible">
                {
                    <h3>Item 1</h3>
                    <h2>Item 2</h2>
                    <h1>Item 3</h1>
                    <h4>Item 4</h4>
                }
            </div>
        </div>
        <div class="test-expected">
            <div class="editible">
                <ul>{
                    <li><h3>Item 1</h3></li>
                    <li><h2>Item 2</h2></li>
                    <li><h1>Item 3</h1></li>
                    <li><h4>Item 4</h4></li>
                    }
                </ul>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        testEditor('.test-7', function(input) {
            var unorderedListButton = getLayoutElement(input).find('.raptor-ui-list-unordered');
            unorderedListButton.trigger('click');
            rangesToTokens(rangy.getSelection().getAllRanges());

            if (!unorderedListButton.is('.ui-state-highlight')){
                throw new Error('Button is not active');
            }
        });
    </script>

    <div class="test-8">
        <h1>Unordered List 8: Toggle bottom list of two lists and check selection remains on bottom list</h1>
        <div class="test-input">
            <div class="editible">
                <ul>
                    <li><h3>Item 1</h3></li>
                </ul>
                 <h2>{Item 2}</h2>
            </div>
        </div>
        <div class="test-expected">
            <div class="editible">
                <ul>
                    <li><h3>Item 1</h3></li>
                </ul>
                <ul>
                    <li><h2>{Item 2}</h2></li>
                </ul>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        testEditor('.test-8', function(input) {
            var unorderedListButton = getLayoutElement(input).find('.raptor-ui-list-unordered');
            unorderedListButton.trigger('click');
            rangesToTokens(rangy.getSelection().getAllRanges());

//            if (!unorderedListButton.is('.ui-state-highlight')){
//                throw new Error('Button is not active');
//            }
        });
    </script>
</body>
</html>