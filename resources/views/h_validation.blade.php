@extends('layouts.head_common')
<html>
<body>
<input type="text" name="doctor_name" value="{{ old('doctor_name') }}">
@if($errors->has('doctor_name')) <span class="text-danger">{{ $errors->first('doctor_name') }}</span> @endif
</body>
</html>
