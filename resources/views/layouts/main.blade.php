<!DOCTYPE html>
<html lang="en">
<head>
    @include('components.head')
</head>
<body>
    @include('components.navbar')

    <div>
	    @yield('content')

	    @include('components.footer')
    </div>
    @include('components.script')
</body>
</html>