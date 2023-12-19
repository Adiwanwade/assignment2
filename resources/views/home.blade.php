 <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <title>Food Blog</title>
</head>

<body>
  <header>
    <div class="logo">
      <img src="images/logo.png" alt="Food Blog Logo">
    </div>
    <nav>
      <ul>
        <li><a href="#">Food Blog</a></li>
        <li><a href="#">Listings</a></li>
        <li class="active"><a href="#">Blog</a></li>
        <li><a href="#">About Us</a></li>
        @if (Route::has('login'))
                    @auth
                        <li><a href="{{ url('/dashboard') }}" >Dashboard</a></li>
                    @else
                        <li><a href="{{ route('login') }}" >Log in</a></li>

                        @if (Route::has('register'))
                    <li><a href="{{ route('register') }}" >Register</a></li>
                        @endif
                    @endauth
        @endif
      </ul>
    </nav>
    <div class="cta-buttons">
      <a href="#" class="cta-button">List Your Place</a>
      <a href="#" class="cta-button">Share Your Recipe</a>
    </div>
  </header>
<br>
  <main>


<h2 class="page-name">Blogs</h2>

<div style="display: flex;justify-content:center">
    <section class="blog-posts">
        <article class="post">
            <div class="post-image">
              <a href="">
                <img loading="lazy" decoding="async" src="Images/3_47ad27a4-db92-4c31-a3ca-d98e645f6ab4.webp" alt="White Sauce Pasta Recipe">
              </a>
            </div>
            <div class="post-content">
              <h2 class="post-title"><a href="">White Sauce Pasta Recipe (White Pasta)</a></h2>
              <div class="post-description">
                White Sauce Pasta...
              </div>
              <div class="post-read-more">
                <a href=''>Read More</a>
              </div>
            </div>
          </article>
    </section>
    <section class="blog-posts">
          <article class="post">
            <div class="post-image">
              <a href="">
                <img loading="lazy" decoding="async" src="Images/3_47ad27a4-db92-4c31-a3ca-d98e645f6ab4.webp" alt="White Sauce Pasta Recipe">
              </a>
            </div>
            <div class="post-content">
              <h2 class="post-title"><a href="">White Sauce Pasta Recipe (White Pasta)</a></h2>
              <div class="post-description">
                White Sauce Pasta...
              </div>
              <div class="post-read-more">
                <a href=''>Read More</a>
              </div>
            </div>
          </article>
    </section>
  </div>
  <div style="display: flex;justify-content:center">
    <section class="blog-posts">
      <article class="post">
        <div class="post-image">
          <a href="">
            <img loading="lazy" decoding="async" src="Images/3_47ad27a4-db92-4c31-a3ca-d98e645f6ab4.webp" alt="White Sauce Pasta Recipe">
          </a>
        </div>
        <div class="post-content">
          <h2 class="post-title"><a href="">White Sauce Pasta Recipe (White Pasta)</a></h2>
          <div class="post-description">
            White Sauce Pasta...
          </div>
          <div class="post-read-more">
            <a href=''>Read More</a>
          </div>
        </div>
      </article>
</section>
<section class="blog-posts">
  <article class="post">
    <div class="post-image">
      <a href="">
        <img loading="lazy" decoding="async" src="Images/3_47ad27a4-db92-4c31-a3ca-d98e645f6ab4.webp" alt="White Sauce Pasta Recipe">
      </a>
    </div>
    <div class="post-content">
      <h2 class="post-title"><a href="">White Sauce Pasta Recipe (White Pasta)</a></h2>
      <div class="post-description">
        White Sauce Pasta...
      </div>
      <div class="post-read-more">
        <a href=''>Read More</a>
      </div>
    </div>
  </article>
</section>
  </div>
  </main>

  <script src="script.js"></script>
</body>
<style>
    body {
  font-family: 'Arial', sans-serif;
  margin: 0;
  padding: 0;
  background-color: rgb(20, 18, 21);
}

header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 10px 20px;
  background-color: rgb(18, 2, 2);
}

.logo img {
  max-width: 100%;
  height: auto;
}

nav ul {
  list-style: none;
  display: flex;
}

nav ul li {
  margin-right: 20px;

}

nav a {
  text-decoration: none;
  color: #f5f5f5;
  font-weight: bold;
  font-size: 16px;
  line-height: 5%;
  margin-bottom: 30px;
  margin-top: 0;
}

nav a:hover {
  color: #ff6600;
}

.active a {
  color: #ff6600;
}

.cta-buttons {
  display: flex;
}

.cta-button {
  margin-right: 10px;
  padding: 10px 20px;
  background-color: #ff6600;
  color: #fff;
  text-decoration: none;
  border-radius: 5px;
}

.cta-button:hover {
  background-color: #cc5500;
}

h1{
    color: #fff;
}

.main {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
}

.blog-posts {
  width: 542px;
  margin: 29px;
  height: 553px;
}

.post {
  margin-bottom: 40px;
  border-radius: 8px;
  overflow: hidden;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  border-style: solid;
    border-width: 1px 1px 1px 1px;
    border-color: #dfdfdf
}

.post-image {
  position: relative;
}

.post-image img {
  width: 100%;
  height: auto;
  display: block;
}
.post-image img:hover{
  transform: scale(1.1);
}
.post-content {
  padding: 20px;
  background-color: #fff;
}

.post-title {
  margin-top: 0;
}
.post-title a {
  text-decoration: none;
  color: black;
}
.post-description {
  margin-bottom: 20px;
}

.post-read-more a {
  display: inline-block;
  padding: 10px 20px;
  background-color: #ff6600;
  color: #fff;
  text-decoration: none;
  border-radius: 5px;
}

.post-read-more a:hover {
  background-color: #cc5500;
}

.page-name{
  font-size: 60px;
  font-family: Roboto, sans-serif;
  color: #B0976D;
  left: 388px;
  position: relative;
  font-weight: 600;
  margin: 0px;
}

</style>
</html>
