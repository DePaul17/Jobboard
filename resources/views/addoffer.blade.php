<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
      {{ __('Dashboard') }}
    </h2>
  </x-slot>

  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/design.css') }}">
  </head>

  <body>
    <div class="card">
      <div class="btn mb-3" style="padding-top: 5px;padding-bottom: 5px;">
        @if (Session::has('success'))
        <div class="alert alert-success" role="alert" id="success-alert">
          <ul>
            <li>{{ Session::get('success') }}</li>
          </ul>
        </div>
        @endif
      </div>
      <div class="card-body">
        <h3 class="card-title text-center">Add offer</h3>
        <hr>
        <form method="post" action="{{route('add_new_offer')}}">
          @csrf
          <div class="mb-3">
            <label for="company">Company</label>
            <select class="form-select" aria-label="Default select example" name="company_id" required>
              <option value="">Choose the company concerned</option>
              @foreach ($companies as $company)
              <option value="{{ $company->id }}">{{ $company->name }}</option>
              @endforeach
            </select>
          </div>
          <div class="mb-3">
            <label for="advertisement" class="form-label">Advertisement</label>
            <input type="text" class="form-control" id="advertisement" name="advertisements" required>
          </div>
          <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" name="description" id="description" cols="31" rows="5" required></textarea>
            <!-- <input type="text" class="form-control" id="description" name="description" required> -->
          </div>
          <div class="mb-3">
            <label for="date" class="form-label">Date</label>
            <input type="date" class="form-control" id="date_pub" name="date_pub" min="{{ date('Y-m-d') }}" required>
          </div>
          <div style="display: flex; justify-content: space-between;">
            <div class="mb-3" style="margin-right: 10px;">
              <label for="type" class="form-label">Type</label>
              <select class="form-select" aria-label="Default select example" name="type" required>
                <option value="">Choose the type</option>
                <option value="Course">Course</option>
                <option value="Alternation">Alternation</option>
                <option value="Fixed-term contract">Fixed-term contract</option>
                <option value="Permanent">Permanent</option>
              </select>
            </div>
            <div class="mb-3">
              <label for="phone" class="form-label">Time</label>
              <select class="form-select" aria-label="Default select example" name="time" required>
                <option value="">Choose time</option>
                <option value="Partial">Partial</option>
                <option value="Full time">Full time</option>
                <option value="Interim">Interim</option>
              </select>
            </div>
          </div>
          <div class="btn">
            <button type="submit" class="btn btn-success">Published</button>
          </div>
        </form>
      </div>
    </div>
  </body>
  <div class='footer'>
    <div class="footer-container">
      <p class="text1">Copyright © 2023 PreMSc Epitech - Paris, Ltd. All Rights Reserved.</p><br>
      <p class="text2">Web Designed by <a href="https://www.linkedin.com/in/guy-vincent-de-paul-mouyabi-ba2a0725b?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=ios_app" class="over" style="color:#33ccc5; text-decoration:none;">DePaulwin!</a> and <a href="www.linkedin.com/in/lysweb" class="over" style="color:#33ccc5 ;text-decoration:none">Lys</a></p>
    </div>
  </div>

  </html>

  <script>
    setTimeout(function() {
      var successAlert = document.getElementById('success-alert');
      if (successAlert) {
        successAlert.style.display = 'none';
      }
    }, 3000); // 3000 millisecondes (3 secondes)
  </script>

</x-app-layout>