<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">


<title>EverGreen Club Members and Donors</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
<style type="text/css">
    	body{margin-top:0px;}


/* USER LIST TABLE */
.user-list tbody td > img {
    position: relative;
	max-width: 50px;
	float: left;
	margin-right: 15px;
}
.user-list tbody td .user-link {
	display: block;
	font-size: 1.25em;
	padding-top: 3px;
	margin-left: 60px;
}
.user-list tbody td .user-subhead {
	font-size: 0.875em;
	font-style: italic;
}

/* TABLES */
.table {
    border-collapse: separate;
}
.table-hover > tbody > tr:hover > td,
.table-hover > tbody > tr:hover > th {
	background-color: #eee;
}
.table thead > tr > th {
	border-bottom: 1px solid #C2C2C2;
	padding-bottom: 0;
}
.table tbody > tr > td {
	font-size: 0.875em;
	background: #f5f5f5;
	border-top: 10px solid #fff;
	vertical-align: middle;
	padding: 12px 8px;
}
.table tbody > tr > td:first-child,
.table thead > tr > th:first-child {
	padding-left: 20px;
}
.table thead > tr > th span {
	border-bottom: 2px solid #C2C2C2;
	display: inline-block;
	padding: 0 5px;
	padding-bottom: 5px;
	font-weight: normal;
}
.table thead > tr > th > a span {
	color: #344644;
}
.table thead > tr > th > a span:after {
	content: "\f0dc";
	font-family: FontAwesome;
	font-style: normal;
	font-weight: normal;
	text-decoration: inherit;
	margin-left: 5px;
	font-size: 0.75em;
}
.table thead > tr > th > a.asc span:after {
	content: "\f0dd";
}
.table thead > tr > th > a.desc span:after {
	content: "\f0de";
}
.table thead > tr > th > a:hover span {
	text-decoration: none;
	color: #2bb6a3;
	border-color: #2bb6a3;
}
.table.table-hover tbody > tr > td {
	-webkit-transition: background-color 0.15s ease-in-out 0s;
	transition: background-color 0.15s ease-in-out 0s;
}
.table tbody tr td .call-type {
	display: block;
	font-size: 0.75em;
	text-align: center;
}
.table tbody tr td .first-line {
	line-height: 1.5;
	font-weight: 400;
	font-size: 1.125em;
}
.table tbody tr td .first-line span {
	font-size: 0.875em;
	color: #969696;
	font-weight: 300;
}
.table tbody tr td .second-line {
	font-size: 0.875em;
	line-height: 1.2;
}
.table a.table-link {
	margin: 0 5px;
	font-size: 1.125em;
}
.table a.table-link:hover {
	text-decoration: none;
	color: #2aa493;
}
.table a.table-link.danger {
	color: #fe635f;
}
.table a.table-link.danger:hover {
	color: #dd504c;
}

.table-products tbody > tr > td {
	background: none;
	border: none;
	border-bottom: 1px solid #ebebeb;
	-webkit-transition: background-color 0.15s ease-in-out 0s;
	transition: background-color 0.15s ease-in-out 0s;
	position: relative;
}
.table-products tbody > tr:hover > td {
	text-decoration: none;
	background-color: #f6f6f6;
}
.table-products .name {
	display: block;
	font-weight: 600;
	padding-bottom: 7px;
}
.table-products .price {
	display: block;
	text-decoration: none;
	width: 50%;
	float: left;
	font-size: 0.875em;
}
.table-products .price > i {
	color: #8dc859;
}
.table-products .warranty {
	display: block;
	text-decoration: none;
	width: 50%;
	float: left;
	font-size: 0.875em;
}
.table-products .warranty > i {
	color: #f1c40f;
}
.table tbody > tr.table-line-fb > td {
	background-color: #9daccb;
	color: #262525;
}
.table tbody > tr.table-line-twitter > td {
	background-color: #9fccff;
	color: #262525;
}
.table tbody > tr.table-line-plus > td {
	background-color: #eea59c;
	color: #262525;
}
.table-stats .status-social-icon {
	font-size: 1.9em;
	vertical-align: bottom;
}
.table-stats .table-line-fb .status-social-icon {
	color: #556484;
}
.table-stats .table-line-twitter .status-social-icon {
	color: #5885b8;
}
.table-stats .table-line-plus .status-social-icon {
	color: #a75d54;
}
/* Add a black background color to the top navigation */
.topnav {
  background-color: #333;
  overflow: hidden;
}

/* Style the links inside the navigation bar */
.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

/* Change the color of links on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Add a color to the active/current link */
.topnav a.active {
  background-color: #04AA6D;
  color: white;
}
   </style>
</head>
<body>
<div class="topnav">
  <a href="home.php">Home</a>
  <a class="active" a href="members.php">Members</a>
  <a href="#contact">Contact</a>
  <a href="#about">About</a>
</div>
<br>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="main-box clearfix">
<div class="table-responsive">
<table class="table user-list">
<thead>
<tr>
<th><span>User</span></th>
<th><span>Joined</span></th>
<th class="text-center"><span>Status</span></th>
<th><span>Phone No.</span></th>
<th>&nbsp;</th>
</tr>
</thead>
<tbody>
<tr>
<td>
<img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt>
<a href="#" class="user-link">Ahmad Nadim Bin Faisal</a>
<span class="user-subhead">Member</span>
</td>
<td>
2020/01/01
</td>
<td class="text-center">
<span class="label label-success">Active</span>
</td>
<td>
<a href="#"><span class="__cf_email__" data-cfemail="86ebefeae7c6edf3e8eff5a8e5e9eb">012-34567890</span></a>
</td>
<td style="width: 20%;">
<a href="#" class="table-link">
<span class="fa-stack">
<i class="fa fa-square fa-stack-2x"></i>
<i class="fa fa-search-plus fa-stack-1x fa-inverse"></i>
</span>
</a>
<a href="#" class="table-link">
<span class="fa-stack">
<i class="fa fa-square fa-stack-2x"></i>
<i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
</span>
</a>
<a href="#" class="table-link danger">
<span class="fa-stack">
<i class="fa fa-square fa-stack-2x"></i>
<i class="fa fa-trash-o fa-stack-1x fa-inverse"></i>
</span>
</a>
</td>
</tr>
<tr>
<td>
<img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt>
<a href="#" class="user-link">Amira Atikah Binti Samad</a>
<span class="user-subhead">Donor</span>
</td>
<td>
2022/01/08
</td>
<td class="text-center">
<span class="label label-success">Active</span>
</td>
<td>
<a href="#"><span class="__cf_email__" data-cfemail="f29f93809e9d9cb29080939c969ddc919d9f">011-7045275263</span></a>
</td>
<td style="width: 20%;">
<a href="#" class="table-link">
<span class="fa-stack">
<i class="fa fa-square fa-stack-2x"></i>
<i class="fa fa-search-plus fa-stack-1x fa-inverse"></i>
</span>
</a>
<a href="#" class="table-link">
<span class="fa-stack">
<i class="fa fa-square fa-stack-2x"></i>
<i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
</span>
</a>
<a href="#" class="table-link danger">
<span class="fa-stack">
<i class="fa fa-square fa-stack-2x"></i>
<i class="fa fa-trash-o fa-stack-1x fa-inverse"></i>
</span>
</a>
</td>
</tr>
<tr>
<td>
<img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt>
<a href="#" class="user-link">Brandon Ong</a>
<span class="user-subhead">Donor</span>
</td>
<td>
2023/03/03
</td>
<td class="text-center">
<span class="label label-success">Active</span>
</td>
<td>
<a href="#">016-538907243</a>
</td>
<td style="width: 20%;">
<a href="#" class="table-link">
<span class="fa-stack">
<i class="fa fa-square fa-stack-2x"></i>
<i class="fa fa-search-plus fa-stack-1x fa-inverse"></i>
</span>
</a>
<a href="#" class="table-link">
<span class="fa-stack">
<i class="fa fa-square fa-stack-2x"></i>
<i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
</span>
</a>
<a href="#" class="table-link danger">
<span class="fa-stack">
<i class="fa fa-square fa-stack-2x"></i>
<i class="fa fa-trash-o fa-stack-1x fa-inverse"></i>
</span>
</a>
</td>
</tr>
<tr>
<td>
<img src="https://bootdey.com/img/Content/avatar/avatar4.png" alt>
<a href="#" class="user-link">Che Wan Muhammad Arif Rifqi</a>
<span class="user-subhead">Member</span>
</td>
<td>
2020/01/01
</td>
<td class="text-center">
<span class="label label-success">Active</span>
</td>
<td>
<a href="#"><span class="__cf_email__" data-cfemail="274f524a574f55425e674548404655530944484a">019-6743729731</span></a>
</td>
<td style="width: 20%;">
<a href="#" class="table-link">
<span class="fa-stack">
<i class="fa fa-square fa-stack-2x"></i>
<i class="fa fa-search-plus fa-stack-1x fa-inverse"></i>
</span>
</a>
<a href="#" class="table-link">
<span class="fa-stack">
<i class="fa fa-square fa-stack-2x"></i>
<i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
</span>
</a>
<a href="#" class="table-link danger">
<span class="fa-stack">
<i class="fa fa-square fa-stack-2x"></i>
<i class="fa fa-trash-o fa-stack-1x fa-inverse"></i>
</span>
</a>
</td>
</tr>
<tr>
<td>
<img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt>
<a href="#" class="user-link">Chong Siew Ping</a>
<span class="user-subhead">Donor</span>
</td>
<td>
2021/12/31
</td>
<td class="text-center">
<span class="label label-success">Active</span>
</td>
<td>
<a href="#">018-750834535</a>
</td>
<td style="width: 20%;">
<a href="#" class="table-link">
<span class="fa-stack">
<i class="fa fa-square fa-stack-2x"></i>
<i class="fa fa-search-plus fa-stack-1x fa-inverse"></i>
</span>
</a>
<a href="#" class="table-link">
<span class="fa-stack">
<i class="fa fa-square fa-stack-2x"></i>
<i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
</span>
</a>
<a href="#" class="table-link danger">
<span class="fa-stack">
<i class="fa fa-square fa-stack-2x"></i>
<i class="fa fa-trash-o fa-stack-1x fa-inverse"></i>
</span>
</a>
</td>
</tr>
<tr>
<td>
<img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt>
<a href="#" class="user-link">Doreen Ooi</a>
<span class="user-subhead">Member</span>
</td>
<td>
2013/08/08
</td>
<td class="text-center">
<span class="label label-success">Active</span>
</td>
<td>
<a href="#"><span class="__cf_email__" data-cfemail="cba6a2a7aa8ba0bea5a2b8e5a8a4a6">N/A</span></a>
</td>
<td style="width: 20%;">
<a href="#" class="table-link">
<span class="fa-stack">
<i class="fa fa-square fa-stack-2x"></i>
<i class="fa fa-search-plus fa-stack-1x fa-inverse"></i>
</span>
</a>
<a href="#" class="table-link">
<span class="fa-stack">
<i class="fa fa-square fa-stack-2x"></i>
<i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
</span>
</a>
<a href="#" class="table-link danger">
<span class="fa-stack">
<i class="fa fa-square fa-stack-2x"></i>
<i class="fa fa-trash-o fa-stack-1x fa-inverse"></i>
</span>
</a>
</td>
</tr>
<tr>
<td>
<img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt>
<a href="#" class="user-link">Erdania Putri</a>
<span class="user-subhead">Member</span>
</td>
<td>
2020/01/01
</td>
<td class="text-center">
<span class="label label-success">Active</span>
</td>
<td>
<a href="#"><span class="__cf_email__" data-cfemail="325f53405e5d5c725040535c565d1c515d5f">011-11766256</span></a>
</td>
<td style="width: 20%;">
<a href="#" class="table-link">
<span class="fa-stack">
<i class="fa fa-square fa-stack-2x"></i>
<i class="fa fa-search-plus fa-stack-1x fa-inverse"></i>
</span>
</a>
<a href="#" class="table-link">
<span class="fa-stack">
<i class="fa fa-square fa-stack-2x"></i>
<i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
</span>
</a>
<a href="#" class="table-link danger">
<span class="fa-stack">
<i class="fa fa-square fa-stack-2x"></i>
<i class="fa fa-trash-o fa-stack-1x fa-inverse"></i>
</span>
</a>
</td>
</tr>
<tr>
<td>
<img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt>
<a href="#" class="user-link">Ezreen Dlaila</a>
<span class="user-subhead">Donor</span>
</td>
<td>
2023/12/30
</td>
<td class="text-center">
<span class="label label-success">Active</span>
</td>
<td>
<a href="#">N/A</a>
</td>
<td style="width: 20%;">
<a href="#" class="table-link">
<span class="fa-stack">
<i class="fa fa-square fa-stack-2x"></i>
<i class="fa fa-search-plus fa-stack-1x fa-inverse"></i>
</span>
</a>
<a href="#" class="table-link">
<span class="fa-stack">
<i class="fa fa-square fa-stack-2x"></i>
<i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
</span>
</a>
<a href="#" class="table-link danger">
<span class="fa-stack">
<i class="fa fa-square fa-stack-2x"></i>
<i class="fa fa-trash-o fa-stack-1x fa-inverse"></i>
</span>
</a>
</td>
</tr>
<tr>
<td>
<img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt>
<a href="#" class="user-link">Ezreen Erdyna</a>
<span class="user-subhead">Donor</span>
</td>
<td>
2023/12/30
</td>
<td class="text-center">
<span class="label label-success">Active</span>
</td>
<td>
<a href="#"><span class="__cf_email__" data-cfemail="3c5449514c544e59457c5e535b5d4e48125f5351">019-8624364341</span></a>
</td>
<td style="width: 20%;">
<a href="#" class="table-link">
<span class="fa-stack">
<i class="fa fa-square fa-stack-2x"></i>
<i class="fa fa-search-plus fa-stack-1x fa-inverse"></i>
</span>
</a>
<a href="#" class="table-link">
<span class="fa-stack">
<i class="fa fa-square fa-stack-2x"></i>
<i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
</span>
</a>
<a href="#" class="table-link danger">
<span class="fa-stack">
<i class="fa fa-square fa-stack-2x"></i>
<i class="fa fa-trash-o fa-stack-1x fa-inverse"></i>
</span>
</a>
</td>
</tr>
<tr>
<td>
<img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt>
<a href="#" class="user-link">Henry Kam</a>
<span class="user-subhead">Member</span>
</td>
<td>
2013/12/31
</td>
<td class="text-center">
<span class="label label-success">Active</span>
</td>
<td>
<a href="#">016-582362413</a>
</td>
<td style="width: 20%;">
<a href="#" class="table-link">
<span class="fa-stack">
<i class="fa fa-square fa-stack-2x"></i>
<i class="fa fa-search-plus fa-stack-1x fa-inverse"></i>
</span>
</a>
<a href="#" class="table-link">
<span class="fa-stack">
<i class="fa fa-square fa-stack-2x"></i>
<i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
</span>
</a>
<a href="#" class="table-link danger">
<span class="fa-stack">
<i class="fa fa-square fa-stack-2x"></i>
<i class="fa fa-trash-o fa-stack-1x fa-inverse"></i>
</span>
</a>
</td>
</tr>
</tbody>
</table>
</div>
<ul class="pagination pull-right">
<li><a href="#"><i class="fa fa-chevron-left"></i></a></li>
<li><a href="members.php">1</a></li>
<li><a href="members2.php">2</a></li>
<li><a href="#">3</a></li>
<li><a href="#">4</a></li>
<li><a href="#">5</a></li>
<li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
</ul>
</div>
</div>
</div>
</div>
<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script type="text/javascript">
	
</script>
</body>
</html>