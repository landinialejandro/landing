<!DOCTYPE html>
<?php if(!defined('PREPEND_PATH')) define('PREPEND_PATH', '../../dist/'); ?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VSC_Snippets</title>
    <link id="browser_favicon" rel="shortcut icon" href="logo.png">
    <link rel="stylesheet" href="<?php echo PREPEND_PATH; ?>plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="<?php echo PREPEND_PATH; ?>plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
    <link rel="stylesheet" href="<?php echo PREPEND_PATH; ?>plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <link rel="stylesheet" href="<?php echo PREPEND_PATH; ?>plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="<?php echo PREPEND_PATH; ?>plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <link rel="stylesheet" href="<?php echo PREPEND_PATH; ?>dist/css/adminlte.css">
    <link rel="stylesheet" href="<?php echo PREPEND_PATH; ?>dist_L/jsonedit/jsonedit.css">
</head>

<body class="layout-top-nav">
    <div class="wrapper">
        <nav class="main-header navbar navbar-expand-lg navbar-dark">
            <a href="http://landini.com.ar/" class="navbar-brand">
                <img src="<?php echo PREPEND_PATH; ?>dist_L/logo/L3.png" alt="L Logo" class="brand-image elevation-3"
                    style="opacity: .8;margin-right: -20px;">
                <span class="brand-text font-weight-light">andini &nbsp&nbsp&nbsp&nbsp&nbsp VSCode Snippets
                    generator</span>
            </a>
        </nav>
        <div class="content-wrapper">
            <section class="content-header">
            </section>
            <section class="content">
                <div class=" container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card card-primary">
                                <div class=" card-header">
                                    <h3 class=" card-title">Snippets form</h3>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="maximize"><i
                                                class="fas fa-expand"></i></button>
                                        <button type="button" class="btn btn-tool" data-toggle="tooltip" title="Help"
                                            data-widget="chat-pane-toggle">
                                            <i class="fas fa-question"></i></button>
                                    </div>
                                </div>
                                <form role="form">
                                    <div class=" card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Name</label>
                                                    <input name="name" type="text" class="form-control"
                                                        placeholder="Enter Name ...">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Prefix</label>
                                                    <input type="text" name="prefix" class="form-control"
                                                        placeholder="Enter prefix...">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Scope</label>
                                                    <div class="select2-primary">
                                                        <select id="scope" class="select2bs4" multiple="multiple"
                                                            data-placeholder="Select a scope" style="width: 100%;">
                                                            <option>php</option>
                                                            <option>javascript</option>
                                                            <option>html</option>
                                                            <option>mysql</option>
                                                            <option>visualbasic</option>
                                                            <option>perl</option>
                                                            <option>css</option>
                                                            <option>typescript</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Description</label>
                                                    <input name="description" type="text" class="form-control"
                                                        placeholder="Enter description...">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Variables</label>
                                                    <select id="variables" class="form-control">
                                                        <option value=""></option>
                                                        <option>TM_SELECTED_TEXT</option>
                                                        <option>TM_CURRENT_LINE</option>
                                                        <option>TM_CURRENT_WORD</option>
                                                        <option>TM_LINE_INDEX</option>
                                                        <option>TM_LINE_NUMBER</option>
                                                        <option>TM_FILENAME</option>
                                                        <option>TM_FILENAME_BASE</option>
                                                        <option>TM_DIRECTORY</option>
                                                        <option>TM_FILEPATH</option>
                                                        <option>CLIPBOARD</option>
                                                        <option>WORKSPACE_NAME</option>
                                                        <option>CURRENT_YEAR</option>
                                                        <option>CURRENT_YEAR_SHORT</option>
                                                        <option>CURRENT_MONTH</option>
                                                        <option>CURRENT_MONTH_NAME</option>
                                                        <option>CURRENT_MONTH_NAME_SHORT</option>
                                                        <option>CURRENT_DATE</option>
                                                        <option>CURRENT_DAY_NAME</option>
                                                        <option>CURRENT_DAY_NAME_SHORT</option>
                                                        <option>CURRENT_HOUR</option>
                                                        <option>CURRENT_MINUTE</option>
                                                        <option>CURRENT_SECOND</option>
                                                        <option>CURRENT_SECONDS_UNIX</option>
                                                        <option>BLOCK_COMMENT_START</option>
                                                        <option>BLOCK_COMMENT_END</option>
                                                        <option>LINE_COMMENT</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Placeholder</label>
                                                    <br>
                                                    <div class="btn-group">
                                                        <a id="addTab" class="btn btn-app">
                                                            <i class="fas fa-play"></i> Add
                                                        </a>
                                                        <a id="resetTab" class="btn btn-app">
                                                            <span class="badge bg-warning">0</span>
                                                            <i class="fas fa-bullhorn"></i> Reset
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">

                                                <div class="form-group">
                                                    <label>Body</label>
                                                    <textarea name="body" id="bodyCode" class="form-control" rows="4"
                                                        placeholder="Snippet here ..."></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <button id="doit" type="button" class="btn btn-primary">Add</button>
                                        <a id="clear" href="index.html" type="submit" class="btn btn-warning">clear</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card card-success direct-chat ">
                                <div class=" card-header">
                                    <h3 class=" card-title">Snippets result</h3>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="maximize"><i
                                                class="fas fa-expand"></i></button>
                                        <button type="button" class="btn btn-tool" data-toggle="tooltip" title="Help"
                                            data-widget="chat-pane-toggle">
                                            <i class="fas fa-question"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class=" btn-group">
                                        <button class="btn btn-app">
                                            <i class="fas fa-redo" onclick="load_from_box('jsonglobals'); "
                                                title="reset to last changues"></i> Reset
                                        </button>
                                        <button class="btn btn-app" onclick="extract_json('json_editor',' '); "
                                            title="save changues to server">
                                            <i class="fas fa-save"></i> Update
                                        </button>
                                        <button class="btn btn-app" onclick="copyToClipboard('jsonglobals'); "
                                            title="save changues to server">
                                            <i class="fas fa-copy"></i></i> Copy snippet
                                        </button>
                                    </div>
                                    <div class="col-12">
                                        <h5 class="mb-2">json Text Area</h5>
                                        <textarea id="jsonglobals" rows="8" class="form-control">
                                                </textarea>
                                    </div>
                                    <div class="col-12">
                                        <h5 class="mb-2">Visual editable area</h5>
                                        <div id="json_editor" data-role="myjson"></div>
                                    </div>
                                    <div class="direct-chat-contacts">
                                        <ul class="contacts-list">
                                            <li>
                                                <div class="contacts-list-info">
                                                    <span class="contacts-list-name">
                                                        Help
                                                        <small class="contacts-list-date float-right">28/04/2020</small>
                                                    </span>
                                                    <span class="contacts-list-msg">Use guide!!</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="contacts-list-info">
                                                    <span class="contacts-list-name">
                                                        Reset Button
                                                    </span>
                                                    <span class="contacts-list-msg">Convert the json string in visual
                                                        editable object.</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="contacts-list-info">
                                                    <span class="contacts-list-name">
                                                        Update Button
                                                    </span>
                                                    <span class="contacts-list-msg">Update ths json string from visual
                                                        editable object.</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="contacts-list-info">
                                                    <span class="contacts-list-name">
                                                        json Text Area
                                                    </span>
                                                    <span class="contacts-list-msg">Place to write json text. The text
                                                        comes from the left form, or you can paste an external code to
                                                        make it an editable object.</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="contacts-list-info">
                                                    <span class="contacts-list-name">
                                                        Visual editable area
                                                    </span>
                                                    <span class="contacts-list-msg">The json text becomes editable
                                                        objects, it is also possible to add new objects.
                                                    <br>
                                                    click on each element to edit it
                                                    </span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <footer class="main-footer">
            <div class="float-right d-none d-sm-inline">
                Anything you want
            </div>
            <strong>Copyright &copy; 2014-2019 powered by <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All
            rights reserved.
        </footer>
    </div>
    <script src="<?php echo PREPEND_PATH; ?>plugins/jquery/jquery.min.js"></script>
    <script src="<?php echo PREPEND_PATH; ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo PREPEND_PATH; ?>plugins/select2/js/select2.full.min.js"></script>
    <script src="<?php echo PREPEND_PATH; ?>plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
    <script src="<?php echo PREPEND_PATH; ?>dist/js/adminlte.min.js"></script>
    <script src="<?php echo PREPEND_PATH; ?>dist_L/jsonedit/jsonedit.js"></script>
    <script src="<?php echo PREPEND_PATH; ?>dist_L/jsonedit/jquery.contextMenu.js"></script>
    <script src="<?php echo PREPEND_PATH; ?>dist_L/jsonedit/jeditable.js"></script>
    <script>
        var snippet = {};
        $(function () {
            $('#bodyCode').css("font-family", "courier");
            $('#jsonglobals').css("font-family", "courier");
            $('.select2bs4').select2();
            $("#addTab").on('click', function () {
                var c = counter();
                var txtToAdd = "${" + c + ":example}";
                var s = 3 + c.toString().length
                addVar(txtToAdd, s, 7);
            });
            $("#resetTab").on('click', function () {
                counter(true);
            })
            $('#variables').on('change', function () {
                var txtToAdd = "$" + $(this).val();
                addVar(txtToAdd, txtToAdd.length, 0);
            })
            $('#doit').on('click', function () {
                doJsonCode();
            })
        })
        function addVar(txtToAdd, s, e) {
            //https://stackoverflow.com/questions/1064089/inserting-a-text-where-cursor-is-using-javascript-jquery
            //https://stackoverflow.com/questions/714830/selectionstart-end-with-textareas
            var $txt = $("#bodyCode");
            var caretPos = $txt[0].selectionStart;
            var textAreaTxt = $txt.val();
            $txt.val(textAreaTxt.substring(0, caretPos) + txtToAdd + textAreaTxt.substring(caretPos));
            $txt[0].selectionStart = caretPos + s;
            $txt[0].selectionEnd = $txt[0].selectionStart + e;
            $txt.focus();
        };
        function counter(r = false) {
            var $badge = $('#resetTab > .badge');
            var count = Number($badge.text()) + 1;
            if (r) count = 0;
            $badge.text(count);
            return count;
        }
        function doJsonCode() {
            var o = JSON.stringify(jsonObje(), null, "\t")
            json_editor('json_editor', o);
            $('#jsonglobals').text(o)
            // add the jquery editing magic
            apply_editlets();
        }
        function jsonObje() {
            //https://stackoverflow.com/questions/15009448/creating-a-json-dynamically-with-each-input-value-using-jquery
            var scopes = $("#scope").val();
            var snp = {};
            snp["description"] = $("input[name=description]").val();
            snp["body"] = $('#bodyCode').val().split('\n');
            snp["prefix"] = $("input[name=prefix]").val();
            snp["scope"] = scopes.join();
            snippet[$("input[name=name]").val()] = snp;
            return snippet;
        }
        function copyToClipboard(elementId) {
            //https://stackoverflow.com/questions/22581345/click-button-copy-to-clipboard-using-jquery
            var aux = document.createElement("input");
            aux.setAttribute("value", document.getElementById(elementId).innerHTML);
            document.body.appendChild(aux);
            aux.select();
            document.execCommand("copy");
            document.body.removeChild(aux);
        }
    </script>
</body>

</html>