<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Contact Form</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
  <h2 class="mb-4 text-center">Contact Form</h2>
  <form method="post" action="{{ route('site5.update') }}" enctype="multipart/form-data">
    
    @csrf <!-- new way to create token to form -->

    <div class="hidden">
      <input type="hidden" name="id" value="{{ $contact->id }}">
    </div>

    <div class="mb-3">
      <label for="username" class="form-label">Username</label>
      <input type="text" name="name" value="{{ $contact->name }}" class="form-control" id="username" placeholder="Enter your name" required>
    </div>

    <div class="mb-3">
      <label for="email" class="form-label">Email address</label>
      <input type="email" name="email" value="{{ $contact->email }}" class="form-control" id="email" placeholder="Enter your email" required>
    </div>

    <div class="mb-3">
      <label for="phone" class="form-label">Phone Number</label>
      <input type="tel" name="phone" value="{{ $contact->phone }}" class="form-control" id="phone" placeholder="Enter your phone number" required>
    </div>

    <div class="mb-3">
      <label for="message" class="form-label">Message</label>
      <textarea class="form-control" name="massege" id="message" rows="4" placeholder="Type your message here..." required>{{ $contact->massege }}</textarea>
    </div>

    <div class="mb-3">
      <label for="image" class="form-label">Upload Image</label>
      <input class="form-control" type="file" name="image" id="image" accept="image/*">
    </div>

    <div class="mb-3">
      <label class="form-label">Image Preview:</label>
      <img src="{{ asset('SiteFiveUploads/' . $contact->image) }}" alt="" style="width: 150px;">
    </div>

    <button type="submit" class="btn btn-primary">Update</button>
  </form>
</div>

<!-- Bootstrap JS (optional for some features) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
