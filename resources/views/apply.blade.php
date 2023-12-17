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
        <!--form to apply-->
        <div class="card">
            <div class="card-body">
                <h3 class="card-title text-center">Apply for job</h3>
                <hr>
                <!--http://127.0.0.1:8000/apply/job/1-->
                <!--------------------------------JUST DISPLAY IT ------------------------------------->
                <div style="display: flex; justify-content: space-between;">
                    <div class="mb-3" style="margin-right: 10px;">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" value="{{ auth()->user()->name }}" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="first_name" class="form-label">First name</label>
                        <input type="text" class="form-control" value="{{ auth()->user()->first_name }}" disabled>
                    </div>
                </div>
                <div style="display: flex; justify-content: space-between;">
                    <div class="mb-3" style="margin-right: 10px;">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="text" class="form-control" value="{{ auth()->user()->phone }}" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" class="form-control" value="{{ auth()->user()->address }}" disabled>
                    </div>
                </div>
                <!--------------------------------------END------------------------------------------------>
                <form method="post" action="{{ route('apply_now_traitement') }}" enctype="multipart/form-data">
                    @csrf

                    <input type="hidden" name="advertisement_id" value="{{ $apply->id }}">
                    
                    <div class="mb-3">
                        <label for="resume">Add resume</label>
                        <input class="form-control" type="file" id="resume" name="resume" required>
                    </div>
                    <div class="mb-3">
                        <textarea class="form-control" id="motivation" name="motivation" cols="41" rows="10" required></textarea>
                    </div>
                    <div class="btn">
                        <button type="submit" class="btn btn-success">Apply now</button>
                    </div>
                    <br>
                </form>

            </div>
        </div>
    </body>

    </html>
    <div class='footer'>
    <div class="footer-container">
      <p class="text1">Copyright © 2023 PreMSc Epitech - Paris, Ltd. All Rights Reserved.</p><br>
      <p class="text2">Web Designed by <a href="https://www.linkedin.com/in/guy-vincent-de-paul-mouyabi-ba2a0725b?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=ios_app" class="over" style="color:#33ccc5; text-decoration:none;">DePaulwin!</a> and <a href="www.linkedin.com/in/lysweb" class="over" style="color:#33ccc5 ;text-decoration:none">Lys</a></p>
    </div>
  </div>

</x-app-layout>