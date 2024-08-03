<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Payment Form</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Custom CSS -->
  <style>
    .container {
      margin-top: 50px;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <div class="card">
          <div class="card-header">
            <h3 class="text-center">Payment</h3>
          </div>
          <div class="card-body">
            <form id="paymentForm">
              <div class="form-group">
                <label for="name">Name on Card</label>
                <input type="text" class="form-control" id="name" required>
              </div>
              <div class="form-group">
                <label for="cardNumber">Card Number</label>
                <input type="text" class="form-control" id="cardNumber" required>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="expiry">Expiration Date</label>
                  <input type="text" class="form-control" id="expiry" placeholder="MM/YY" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="cvv">CVV</label>
                  <input type="text" class="form-control" id="cvv" required>
                </div>
              </div>
              <div class="form-group">
                <label for="amount">Amount</label>
                <input type="number" class="form-control" id="amount" value="<?php    session_start(); echo isset($_SESSION['total']) ? $_SESSION['total'] : ''; ?>" required>

              </div>
              <button type="submit" class="btn btn-primary btn-block">Pay Now</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <!-- Custom JavaScript -->
  <script>
    document.getElementById('paymentForm').addEventListener('submit', function(event) {
      event.preventDefault();
      // You can add payment processing logic here
      window.location.href = 'paymentdone.php';
      // Clear form fields
      document.getElementById('paymentForm').reset();
    });
  </script>
</body>
</html>

