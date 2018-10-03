<!doctype html>
<html lang="{{ app()->getLocale() }}">
<style>
    html, body {
  background-color: #fff;
  color: #636b6f;
  font-family: 'Nunito', sans-serif;
  font-weight: 200;
  height: 100vh;
  margin: 0;
}
.flex-center {
  align-items: center;
  display: flex;
  justify-content: center;
}

.position-ref {
  position: relative;
}

.top-right {
  position: absolute;
  right: 10px;
  top: 18px;
}

.content {
  text-align: center;
}

.title {
  font-size: 84px;
}

.links > a {
  color: #636b6f;
  padding: 0 25px;
  font-size: 12px;
  font-weight: 600;
  letter-spacing: .1rem;
  text-decoration: none;
  text-transform: uppercase;
}

.m-b-md {
  margin-bottom: 30px;
}
.checkmark {
  display:inline-block;
  width: 22px;
  height:22px;
  -ms-transform: rotate(45deg); /* IE 9 */
  -webkit-transform: rotate(45deg); /* Chrome, Safari, Opera */
  transform: rotate(45deg);
}

.checkmark_stem {
  position: absolute;
  width:3px;
  height:9px;
  background-color:green;
  left:11px;
  top:6px;
}
.myInput {
  position: absolute;
  right: 450px;
  top: 50px;
}

.checkmark_kick {
  position: absolute;
  width:3px;
  height:3px;
  background-color:green;
  left:8px;
  top:12px;
}
#RedBox {
 color:red; 
font-weight: bold;
text-align: center;
width:22px;
height: 40px;
border-radius: 5px;
}
.search{
    position: absolute;
  right: 450px;
  top: 50px;
}
</style>
    <head>
    @csrf
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'Products') }}</title> 
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link href="{{ asset('/css/app.css') }}" rel="stylesheet" type="text/css">
    </head>
    <body>
     
         @yield('content')
    </body>
</html>
