<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flutterwave Payment Form</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom CSS for hover effects */
        form button:hover {
            background-color: #0A0E27;
            color: #FB9129;
        }

        /* Ensure the container takes full height */
        .full-height {
            min-height: 100vh;
        }
    </style>
</head>
<body style="background-color: #f0f0f0;">

    <div class="container full-height d-flex align-items-center justify-content-center">
        <div class="row justify-content-center w-100">
            <div class="col-md-6">
                <form method="POST" action="{{ route('flutterwave.pay') }}" class="p-4 shadow-lg rounded" style="background-color: #0A0E27;">
                    @csrf
                    <div class="form-group mb-4">
                        <label for="name" class="text-white">Full Name</label>
                        <input type="text" name="name" class="form-control rounded-pill p-3" placeholder="Enter your full name" required style="border: 2px solid #FB9129; background-color: #f0f0f0;">
                    </div>
                    <div class="form-group mb-4">
                        <label for="email" class="text-white">Email</label>
                        <input type="email" name="email" class="form-control rounded-pill p-3" placeholder="Enter your email" required style="border: 2px solid #FB9129; background-color: #f0f0f0;">
                    </div>
                    <div class="form-group mb-4">
                        <label for="amount" class="text-white">Amount</label>
                        <input type="number" name="amount" class="form-control rounded-pill p-3" placeholder="Enter amount" required style="border: 2px solid #FB9129; background-color: #f0f0f0;">
                    </div>
                    <button type="submit" class="btn btn-lg rounded-pill w-100 p-3" style="background-color: #FB9129; color: #0A0E27; font-weight: bold; transition: background-color 0.3s;">
                        Pay with Flutterwave
                    </button>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
