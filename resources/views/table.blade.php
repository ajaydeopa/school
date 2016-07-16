<html>
<head>


<script src="http://docs.handsontable.com/0.15.0-beta3/scripts/jquery.min.js"></script>
<script src="http://docs.handsontable.com/0.15.0-beta3/bower_components/handsontable/dist/handsontable.full.js"></script>
<link type="text/css" rel="stylesheet" href="http://docs.handsontable.com/0.15.0-beta3/bower_components/handsontable/dist/handsontable.full.min.css">
    <script>

    document.addEventListener("DOMContentLoaded", function() {

  var
    data = [
      ['', 'Kia', 'Nissan', 'Toyota', 'Honda'],
      ['2012', 10, 11, 12, 13],
      ['2013', 20, 11, 14, 13],
      ['2014', 30, 15, 12, 13],
      ['2015', '', '', '', ''],
       ['2015', '', '', '', ''],
         ['2015', '', '', '', ''],
         ['2015', '', '', '', ''],
         ['2015', '', '', '', ''],
      ['2016', '', '', '', '']
    ],
    container = document.getElementById('example1'),
    hot1;

  hot1 = new Handsontable(container, {
    rowHeaders: true,
    colHeaders: true,
    fillHandle: true // possible values: true, false, "horizontal", "vertical"
  });
  hot1.loadData(data);

  function bindDumpButton() {
      if (typeof Handsontable === "undefined") {
        return;
      }

      Handsontable.Dom.addEvent(document.body, 'click', function (e) {

        var element = e.target || e.srcElement;

        if (element.nodeName == "BUTTON" && element.name == 'dump') {
          var name = element.getAttribute('data-dump');
          var instance = element.getAttribute('data-instance');
          var hot = window[instance];
          console.log('data of ' + name, hot.getData());
        }
      });
    }
  bindDumpButton();

});
    </script>
</head>
<body>
    <div id="example1" class="hot handsontable"></div>
    </body>
</html>
