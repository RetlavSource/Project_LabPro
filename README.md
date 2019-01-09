<h1 align="center">Projecto Prático de Laboratório de Programação 2018/2019</h1>
<h1 align="center">using</h1>
<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>


<ul>
	<h3><i>Info on Rebuild project after cloning project!</i></h3>
	<li>Clone your project</li>
	<li>Go to the folder application using <code>cd</code> command on your cmd or terminal</li>
	<li>Run <code>composer install</code> on your cmd or terminal</li>
	<li>Copy <code>.env.example</code> file to <code>.env</code> on the root folder. You can type <code>copy .env.example .env</code> if using command prompt Windows or <code>cp .env.example .env</code> if using terminal, Ubuntu</li>
	<li>Open your <code>.env</code> file and change the database name (<code>DB_DATABASE</code>) to whatever you have, username (<code>DB_USERNAME</code>) and password (<code>DB_PASSWORD</code>) field correspond to your configuration. <br/>
	By default, the username is <code>root</code> and you can leave the password field empty. <strong>(This is for Xampp)</strong> <br>
	By default, the username is <code>root</code> and password is also <code>root</code>. <strong>(This is for Lamp)</strong></li>
	<li>Run <code>php artisan key:generate</code></li>
	<h4><i>Do on every PULL request!</i></h4>
	<li>Run <code>composer update</code></li>
	<h4><i>Next, is only if you have a database with entries!</i></h4>
	<li>Run <code>php artisan migrate</code></li>
	<h4><i>Lunch Laravel server!</i></h4>
	<li>Run <code>php artisan serve</code></li>
	<li>Go to <a href="http://localhost:8000" rel="noreferrer">localhost:8000</a></li>
</ul>

