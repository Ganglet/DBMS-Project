<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - Pharmacy Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .login-container {
            max-width: 400px;
            margin: 100px auto;
        }
        .login-header {
            text-align: center;
            margin-bottom: 30px;
        }
        .login-logo {
            font-size: 24px;
            font-weight: bold;
            color: #0d6efd;
            margin-bottom: 10px;
        }
        .card {
            border: none;
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
        }
        .card-header {
            background-color: #0d6efd;
            color: white;
            text-align: center;
            font-weight: bold;
            padding: 15px;
        }
        .btn-login {
            font-size: 0.9rem;
            letter-spacing: 0.05rem;
            padding: 0.75rem 1rem;
        }
        .admin-badge {
            position: absolute;
            top: 10px;
            right: 10px;
            background-color: #dc3545;
            color: white;
            padding: 3px 10px;
            border-radius: 10px;
            font-size: 12px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="login-container">
            <div class="login-header">
                <div class="login-logo">
                    <i class="bi bi-capsule me-2"></i>Pharmacy Management System
                </div>
                <p class="text-muted">Administrative Access</p>
            </div>
            
            <div class="card">
                <div class="card-header">
                    Admin Login
                    <span class="admin-badge">Admin Only</span>
                </div>
                <div class="card-body p-4">
                    <?php if(isset($_GET['error'])): ?>
                        <div class="alert alert-danger">
                            <?php echo htmlspecialchars($_GET['error']); ?>
                        </div>
                    <?php endif; ?>
                    
                    <?php if(isset($_GET['success'])): ?>
                        <div class="alert alert-success">
                            <?php echo htmlspecialchars($_GET['success']); ?>
                        </div>
                    <?php endif; ?>
                    
                    <form action="admin_validate.php" method="post">
                        <div class="mb-3">
                            <label for="username" class="form-label">Admin Username</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
                                <input type="text" class="form-control" id="username" name="username" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Admin Password</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-lock-fill"></i></span>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                        </div>
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" value="" id="rememberMe">
                            <label class="form-check-label" for="rememberMe">
                                Remember login
                            </label>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary btn-login text-uppercase fw-bold">
                                <i class="bi bi-box-arrow-in-right me-2"></i>Sign In
                            </button>
                        </div>
                    </form>
                </div>
                <div class="card-footer text-center py-3">
                    <div class="small text-muted">
                        <i class="bi bi-shield-lock me-1"></i>Secure Administrator Access Only
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-3">
                <a href="login.php" class="text-decoration-none">
                    <i class="bi bi-arrow-left me-1"></i>Back to Staff Login
                </a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>