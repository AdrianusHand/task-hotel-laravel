<!DOCTYPE html>
<html>
<body>
<form action="{{route('insert')}}" method="post">
<br>
Nama Hotel<input type="text" name="hotel_name" value="">
<br>
Email Hotel<input type="text" name="hotel_email" value="">
<br>
ALamat Hotel<input type="text" name="hotel_address" value="">
<br>
Kota<input type="text" name="hotel_city" value="">
<br>
<input type="hidden" name="_token" value="{{Session::token()}}">
<input type="submit" value="Submit">
</form>
</body>
</html>