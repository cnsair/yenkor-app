<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <style>
        /* Global Body Styling */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa; /* Light background for the rest of the page */
        }

        /* Header Section - Yellow Background */
        .header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            background-color: rgba(255, 202, 15, 1); /* Yellow background for header */
            color: white;
            padding: 15px 30px;
        }

        .header .logo img {
            height: 40px;
        }

        .header .back-button {
            background-color: #000; /* Black background for back button */
            border: none;
            color: white;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
        }

        .header .back-button:hover {
            background-color: #444; /* Lighter shade for hover effect */
        }

        /* Layout Wrapper */
        .app-inner-layout__wrapper {
            max-width: 800px;
            margin: auto;
            padding-top: 50px;
        }

        /* Edit Profile Card Section */
        .card {
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #fff; /* White background for the profile card */
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 30px;
            color: black;
        }

        /* Profile Edit Card Header (Yellow Background) */
        .card-header {
            background-color: rgba(255, 202, 15, 1); /* Yellow background for card header */
            color: white;
            padding: 15px;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
        }

        .card-header-title {
            display: flex;
            align-items: center;
            font-size: 1.5rem;
        }

        .form-group {
            margin-bottom: 25px;
        }

        .form-group.name-field {
            margin-top: 20px;
        }

        label {
            font-weight: bold;
        }

        input.form-control,
        input.form-control-file,
        textarea.form-control {
            border: 1px solid #ced4da;
            border-radius: 4px;
            padding: 12px;
            width: 100%;
        }

        /* Placeholder Styling */
        input::placeholder,
        textarea::placeholder {
            color: #6c757d; /* Subtle gray color */
            font-style: italic; /* Optional: makes the placeholder text appear italic */
        }

        input.form-control::placeholder,
        textarea.form-control::placeholder {
            font-size: 1rem; /* Adjust font size */
            font-family: Arial, sans-serif; /* Consistent font for placeholders */
        }

        .btn-primary {
            background-color: #000; /* Black button color */
            color: white;
            border: none;
            padding: 12px 25px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 1rem;
        }

        .btn-primary:hover {
            background-color: #444; /* Darker shade on hover */
        }

        img {
            margin-top: 15px;
        }
    </style>
</head>
<body>

    <!-- Header Section (Logo and Back Button) -->
    <div class="header">
        <div class="logo">
            <img src="path/to/logo.png" alt="Business Logo">
        </div>
        <button class="back-button" onclick="window.history.back()">Back</button>
    </div>

    <!-- Edit Profile Form Wrapper -->
    <div class="app-inner-layout__wrapper">
        <div class="container-fluid">
            <div class="mb-3 card">
                <div class="card-header">
                    <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                        <i class="header-icon lnr-user icon-gradient bg-happy-green"> </i>
                        Edit Profile
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.edit-profile.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH') <!-- Change PUT to PATCH to match your route definition -->

                        <!-- Name Field -->
                        <div class="form-group name-field">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control" value="{{ old('name', $admin->name) }}" required placeholder="Enter your name">
                        </div>

                        <!-- Email Field -->
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control" value="{{ old('email', $admin->email) }}" required placeholder="Enter your email">
                        </div>

                        <!-- Password Field -->
                        <div class="form-group">
                            <label for="password">New Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Leave blank to keep current password">
                        </div>

                        <!-- Profile Image Upload -->
                        <div class="form-group">
                            <label for="profile_image">Profile Image</label>
                            <input type="file" name="profile_image" class="form-control-file">
                            @if($admin->profile_image)
                            <img src="{{ asset('storage/'.$admin->profile_image) }}" alt="Profile Image" width="100px">
                            @endif
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" class="btn btn-primary">Update Profile</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
