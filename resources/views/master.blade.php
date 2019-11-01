<!DOCTYPE html>
<html>
<head>
	<title>Sistem Template Blade Laravel</title>
</head>
<body>

	<header>

		<h2>Blog</h2>
		<nav>
			<a href="/">HOME</a>
			|
			<a href="/tentang">TENTANG</a>
			|
			<a href="/kontak">KONTAK</a>
		</nav>
	</header>
	<hr/>
	<br/>
	<br/>

	<!-- bagian judul halaman blog -->
	<h3> @yield('judul_halaman') </h3>


	<!-- bagian konten blog -->
	@yield('konten')


	<br/>
	<br/>
	<hr/>
	<footer>
		<p>&copy; <a href="#">www.ketikode.com</a>. 2019</p>
	</footer>

</body>
</html>
