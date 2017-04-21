<html>
	<head>
		<title>学生服务</title>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
	</head>
	<body>
		<center>
			<h1>学生服务</h1>
		</center>
		<div style="float:left;width:50%;">
			<center>学生课表查询</center>
			<form action="{{action('StudentController@timetable')}}" method="get" align="center">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				学号：<input type=text name=number1 value="" size="15">
				<input type="submit" value="submit">
			</form>

		</div>
		<div style="float:right;width:50%;">
			<center>学生信息查询</center>
			<form action="{{action('StudentController@info')}}" method="get" align="center">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				班级号：<input type=text name=number2 value="" size="15">
				<input type="submit" value="submit">
			</form>
		</div>
	</body>
</html>