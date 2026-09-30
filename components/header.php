<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mang Boy's Eatery</title>
    <link rel="icon" type="image/png" href="./assets/icon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <style>
body {
  background-color: #ece9e7;
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
}
html {
  scroll-behavior: smooth;
}
#navMenu .nav-link {
  color: black;
  font-weight: bold;
  border-radius: 8px;
  padding: 0.5rem 1rem;
}
#navMenu .nav-link:hover,
#navMenu .nav-link.active {
  background: #A9c6d4;
  color: #000000;
}
#home, #services, #products, #about, #contact {
  scroll-margin-top: 80px;
}
@media (min-width: 992px) {
  #home, #services, #products, #about, #contact {
    min-height: calc(100vh - 80px);
  }
}
@media (max-width: 991.98px) {
  #home, #services, #products, #about, #contact {
    min-height: auto;
    scroll-margin-top: 70px;
  }
  #home {
    padding-left: 1rem;
    padding-right: 1rem;
  }
  #home img {
    height: 250px;
  }
  .container.my-5 {
    margin-top: 2rem;
    margin-bottom: 2rem;
  }
  .form-container {
    padding: 1rem;
  }
} 
.form-container {
  align-items: center;
  justify-content: center;
  background: #ffffff;
  padding: 2rem;
  border-radius: 1rem;
  box-shadow: 0 0.125rem 1rem rgba(0, 0, 0, 0.075);
}
.form-items label {
  font-size: 16px;
  font-weight: bold;
  margin-bottom: 0.5rem;
  color: #333;
}
.product-card {
  overflow: hidden;           
  background-color: #ffffff;
  box-shadow: 0 10px 24px rgba(0, 0, 0, 0.15);
}
.product-card:hover {
  transform: translateY(-5px);
}
.product-card img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}
.product-card .card-title {
  font-size: 1.25rem;
  font-weight: bold;
}

.about-card {
  overflow: hidden;           
  background-color: #ffffff;
  box-shadow: 0 10px 24px rgba(0, 0, 0, 0.15);
}
.about-card:hover {
  transform: translateY(-5px);
}
.about-card img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}
.about-card .card-title {
  font-size: 1.25rem;
  font-weight: bold;
}
</style>
</head>
<body>