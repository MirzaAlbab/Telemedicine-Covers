@extends('layout.home')
<link rel="stylesheet" href="{{asset('css/styleregis.css') }}">
<style>
        body {
            background: linear-gradient(135deg, #6a11cb, #2575fc); /* Gradient Background */
            font-family: 'Arial', sans-serif;
        }

        .container {
            max-width: 400px;
        }

        .card {
            border-radius: 20px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            background-color: #fff;
            padding: 30px;
            margin-top: 50px;
        }

        .card-title {
            font-size: 24px;
            font-weight: bold;
            color: #333;
            text-align: center;
            margin-bottom: 20px;
        }

        .form-control {
            border-radius: 10px;
            border: 1px solid #ddd;
            padding: 15px;
            font-size: 16px;
            transition: all 0.3s ease;
        }

        .form-control:focus {
            border-color: #2575fc;
            box-shadow: 0 0 5px rgba(37, 117, 252, 0.5);
        }

        .btn-primary {
            background: linear-gradient(135deg, #6a11cb, #2575fc);
            border: none;
            border-radius: 10px;
            padding: 12px;
            width: 100%;
            font-size: 16px;
            font-weight: bold;
            color: white;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background: linear-gradient(135deg, #2575fc, #6a11cb);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .text-center p a {
            color: #2575fc;
            text-decoration: none;
            font-size: 14px;
        }

        .text-center p a:hover {
            text-decoration: underline;
        }

        .footer {
            text-align: center;
            position: absolute;
            bottom: 10px;
            width: 100%;
            font-size: 14px;
            color: #fff;
        }
    </style>
@section('title', 'Register')

@section('container')
<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="row w-50">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title text-center mb-4">Register</h4>
                    <form action="/register" method="POST">
                        <!-- CSRF token if using Laravel -->
                        <!-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> -->

                        <div class="mb-3">
                            <label for="name" class="form-label">Full Name</label>
                            <input type="text" class="form-control" id="name" name="name" required />
                        </div>
                        
                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" class="form-control" id="email" name="email" required />
                        </div>
                        
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required />
                        </div>

                        <div class="mb-3">
                            <label for="password_confirmation" class="form-label">Confirm Password</label>
                            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required />
                        </div>

                        <button type="submit" class="btn btn-primary w-100">Register</button>
                    </form>
                    <div class="mt-3 text-center">
                        <p>Already have an account? <a href="/login">Login here</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection