<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Research & Journals - University of Oxford</title>
  <link href="../bootstrap-5.3.5-dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="style.css" />
  <style>
    body {
        background-image: url('../build/img/bg2.jpg');  
    }
    .filter-section {
    background: rgba(255,255,255,0.7);
    padding: 25px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0,0,0,0.05);
    }
    .card:hover {
      transform: translateY(-5px);
      transition: 0.3s;
      box-shadow: 0 8px 20px rgba(0,0,0,0.1);
    }
    .section-title {
      font-size: 2rem;
      font-weight: bold;
      margin-bottom: 30px;
      text-align: center;
    }
    footer {
      text-align: center;
      padding: 20px 0;
      margin-top: 60px;
      background-color: #f1f1f1;
    }
  </style>
</head>
<body>

<?php include 'navbar.html'; ?>
<!-- Main Content -->
<div class="container">
  <div class="section-title">Research & Journals Repository</div>

  <!-- Filter Form -->
  <div class="filter-section mb-5">
    <form>
      <div class="row g-3">
        <div class="col-md-4">
          <input type="text" name="title" class="form-control" placeholder="Search by Title">
        </div>
        <div class="col-md-4">
          <input type="text" name="author" class="form-control" placeholder="Search by Author">
        </div>
        <div class="col-md-2">
          <select name="year" class="form-select">
            <option value="">Year</option>
            <option value="2025">2025</option>
            <option value="2024">2024</option>
            <option value="2023">2023</option>
            <option value="2022">2022</option>
            <option value="2021">2021</option>
          </select>
        </div>
        <div class="col-md-2">
          <select name="field" class="form-select">
            <option value="">Field</option>
            <option value="Education">Education</option>
            <option value="Health">Health</option>
            <option value="Technology">Technology</option>
            <option value="Economy">Economy</option>
            <option value="Social">Social</option>
          </select>
        </div>
        <div class="col-12 text-end">
          <button type="submit" class="btn btn-primary">Search</button>
          <button type="reset" class="btn btn-secondary">Reset</button>
        </div>
      </div>
    </form>
  </div>

  <!-- Journal Cards -->
  <div class="row">
    <!-- Sample Card 1 -->
    <div class="col-md-4 mb-4">
      <div class="card h-100">
        <div class="card-body">
          <h5 class="card-title">The Future of AI in Education</h5>
          <p class="card-text"><strong>Author:</strong> John Doe</p>
          <p class="card-text"><strong>Year:</strong> 2024</p>
          <p class="card-text"><strong>Field:</strong> Technology</p>
          <a href="#" class="btn btn-outline-primary btn-sm" target="_blank">View Details</a>
        </div>
      </div>
    </div>

    <!-- Sample Card 2 -->
    <div class="col-md-4 mb-4">
      <div class="card h-100">
        <div class="card-body">
          <h5 class="card-title">Social Media and Mental Health</h5>
          <p class="card-text"><strong>Author:</strong> Jane Smith</p>
          <p class="card-text"><strong>Year:</strong> 2023</p>
          <p class="card-text"><strong>Field:</strong> Health</p>
          <a href="#" class="btn btn-outline-primary btn-sm" target="_blank">View Details</a>
        </div>
      </div>
    </div>

    <!-- Sample Card 3 -->
    <div class="col-md-4 mb-4">
      <div class="card h-100">
        <div class="card-body">
          <h5 class="card-title">Economic Growth in Southeast Asia</h5>
          <p class="card-text"><strong>Author:</strong> Michael Tan</p>
          <p class="card-text"><strong>Year:</strong> 2022</p>
          <p class="card-text"><strong>Field:</strong> Economy</p>
          <a href="#" class="btn btn-outline-primary btn-sm" target="_blank">View Details</a>
        </div>
      </div>
    </div>
  </div>



<script src="../bootstrap-5.3.5-dist/js/bootstrap.bundle.min.js"></script>
<?php include 'footer.html'; ?>
<?php include 'loading.php'; ?>
</body>
</html>
