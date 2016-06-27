<html>
<head>
	<link type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.12/themes/redmond/jquery-ui.css" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.8.2/css/jquery.dataTables.css">
<style> 
	
.ng-invalid {
    border: 1px solid red;
}
body {
    font-family: Arial, Helvetica, sans-serif;
}
body, td, th {
    font-size: 14px;
    margin: 0;
	background: :red;
}
table {
    border-collapse: separate;
    border-spacing: 2px;
    display: table;
    margin-bottom: 0;
    margin-top: 0;
    -moz-box-sizing: border-box;
    text-indent: 0;
}
a:link, a:visited, a:hover {
    color: #5D6DB6;
    text-decoration: none;
}
.error {
    color: red;
}
.ui-helper-hidden {
    display: none;
}
.ui-corner-tr
	{
background-color: deepskyblue !important;

	}
	.ui-widget-header
	{
		background-image:none !important;
		border-radius:none !important;
		    border-radius: 0px;
    height: 30px;
	}
.dataTables_wrapper
	{
		width:80%;
	}
	 table
	{
		width:100% !important;
		text-align: center;
	}
</style>
	
	
 
	
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script> 
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/jquery-ui.min.js"></script>
<!-- DataTables --> 
<script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.8.2/jquery.dataTables.min.js"></script> 
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.0.7/angular.js"></script> 
	

<script>	
var angular = angular.module('tableExample', []);

angular.directive('myTable', function () {
    return {
        restrict: 'E, A, C',
        link: function (scope, element, attrs, controller) {
            var dataTable = element.dataTable(scope.options);

            scope.$watch('options.aaData', handleModelUpdates, true);

            function handleModelUpdates(newData) {
                var data = newData || null;
                if (data) {
                    dataTable.fnClearTable();
                    dataTable.fnAddData(data);
                }
            }
        },
        scope: {
            options: "="
        }
    };
});

function Ctrl($scope) {
    $scope.options = {
        aoColumns: [{
            "sTitle": "EmpId"
        }, {
            "sTitle": "Employee Name"
        },
		{
            "sTitle": "Designation"
        },
					{
            "sTitle": "Salary"
        },
		{
            "sTitle": "JoinDate"
        }	
				   ],
       
        aoColumnDefs: [{
            "bSortable": true,
            "aTargets": [0, 1]
        }],
        bJQueryUI: true,
        bDestroy: true,
        aaData: [
           <?php echo getData();?>
        ]
    };

   
}	
</script>

</head>
<body>	

<div ng-app="tableExample">
    <div ng-controller="Ctrl">
   
         <h2>DataTable using Angular JS and PHP</h2> 
        <table my-table options="options"></table>
    </div>
</div>
	
	<?php 
function getData()
{
$con = new mysqli('localhost','root','root','test_db');
$sql = "select * from employees_tbl";
$result = $con->query($sql);
$string = '';
while($row=$result->fetch_array(MYSQLI_BOTH))
{
	$string .=  "[". '"'. $row[0].'"'. ','.'"'. $row[1].'"'. ','.'"'. $row[2].'"'.','.'"'. $row[3].'"'.','.'"'. $row[4].'"'."]". ',';
	 	
}
 $str = rtrim($string,',');
echo $str;
}
	
 
?>
	</body>
</html>