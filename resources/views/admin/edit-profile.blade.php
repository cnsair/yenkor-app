<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <style>
        /* Internal CSS Styling */
        body {
            font-family: Arial, sans-serif; /* Use a clean font */
            background-color: #f8f9fa; /* Light background color */
            margin: 0;
            padding: 20px; /* Add some padding */
        }

        .app-inner-layout__wrapper {
            max-width: 800px; /* Set a max width for the card */
            margin: auto; /* Center the card */
            padding-top: 50px; /* Top padding for spacing */
        }

        .card {
            border: 1px solid #ddd; /* Border for the card */
            border-radius: 5px; /* Rounded corners */
            background-color: #fff; /* White background for the card */
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Subtle shadow */
            padding: 30px; /* Increased padding for the card */
        }

        .card-header {
            background-color: #000; /* Black background for header */
            color: #fff; /* White text color */
            padding: 15px; /* Increased padding for the header */
            border-top-left-radius: 5px; /* Rounded corners for the header */
            border-top-right-radius: 5px; /* Rounded corners for the header */
        }

        .card-header-title {
            display: flex; /* Align items in the header */
            align-items: center; /* Center items vertically */
            font-size: 1.5rem; /* Larger font size for header title */
        }

        .header-icon {
            margin-right: 15px; /* Space between icon and text */
        }

        .form-group {
            margin-bottom: 25px; /* Increased space between form groups */
        }

        /* Add margin to create space between the header and the first form group */
        .form-group.name-field {
            margin-top: 20px; /* Adjust the top margin for the name field */
        }

        label {
            font-weight: bold; /* Make labels bold */
        }

        input.form-control,
        input.form-control-file {
            border: 1px solid #ced4da; /* Border for input fields */
            border-radius: 4px; /* Rounded corners */
            padding: 12px; /* Increased padding for input fields */
            width: 100%; /* Full width for input fields */
        }

        .btn-primary {
            background-color: #000; /* Black button color */
            color: white; /* White text color */
            border: none; /* No border */
            padding: 12px 25px; /* Increased button padding */
            border-radius: 4px; /* Rounded corners */
            cursor: pointer; /* Pointer cursor */
            font-size: 1rem; /* Font size for button */
        }

        .btn-primary:hover {
            background-color: #444; /* Darker shade on hover */
        }

        img {
            margin-top: 15px; /* Space above the profile image */
        }
    </style>
</head>
<body>
    <div class="app-inner-layout__wrapper">
        <div class="app-inner-layout__content">
            <div class="container-fluid">
                <div class="mb-3 card">
                    <div class="card-header-tab card-header">
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
                                <input type="text" name="name" class="form-control" value="{{ old('name', $admin->name) }}" required>
                            </div>

                            <!-- Email Field -->
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" class="form-control" value="{{ old('email', $admin->email) }}" required>
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
    </div>
</body>
</html>