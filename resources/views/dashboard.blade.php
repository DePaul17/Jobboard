<x-app-layout>
    @if(auth()->check() && auth()->user()->role == 1) 
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="d-flex justify-content-between align-items-center mb-3">
                <!-- Button modal for alert -->
                <div class="d-grid gap-2 d-md-flex justify-content-md-start" style="height: 40px; width: 40px;">
                    <a data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample"> <img src="{{ asset('assets/images/alarme.png') }}" alt=""> </a>
                </div>

                <!-- Modal for alert -->
                <!-- Vertically centered scrollable modal -->
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
                    <div class="offcanvas-header">
                        <div class="d-flex align-items-center">
                            <div style="height: 50px; width: 50px;">
                                <img src="{{ asset('assets/images/supports.png') }}" alt="">
                            </div>
                            <div>
                                <h5 class="offcanvas-title" id="offcanvasExampleLabel">Epi.job • Alerts</h5>
                            </div>
                        </div>
                    </div>
                    <div class="offcanvas-body">
                        <div>
                            @foreach($candidacies as $alert)
                            <div class="alert alert-success" role="alert" onclick="supprimerAlerte(this)">
                                <p> <b>{{$alert->user->first_name}} {{$alert->user->name}}</b> applied for this offer: <b>{{$alert->advertisement->advertisements}} - {{$alert->advertisement->company->name}}</b>,
                                    on : <b>{{$alert->created_at}}</b>
                                </p>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <!-- Button modal add an offer -->
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a href="/offer/add" class="btn btn-success"> Add an offer</a>

                    <!-- Boutton add New company -->
                    <a class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        New company <i class="fa fa-plus"></i>
                    </a>
                </div>
            </div>

            <!-- Modal for add new company -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <br>
                        <h1 class="modal-title" id="exampleModalLabel" style="text-align: center;">New company</h1>
                        <br>
                        <hr>
                        <form action="{{route('add_new_company')}}" method="post">
                            @csrf
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="name_company">Name</label>
                                    <input type="text" class="form-control" id="name" name="name" required>
                                </div>
                                <div class="mb-3">
                                    <label for="name_phone">Phone</label>
                                    <input type="text" class="form-control" id="phone" name="phone" required>
                                </div>
                                <div class="mb-3">
                                    <label for="name_address">Address</label>
                                    <input type="text" class="form-control" id="address" name="address" required>
                                </div>
                            </div>
                            <div>
                                <button type="submit" class="btn btn-outline-primary d-grid gap-2 col-6 mx-auto">Validate</button>
                            </div>
                            <div class="mb-3"></div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="table-responsive">
                        <table class="table table-striped table-sm"> <!-- Utilisation de classes pour réduire la taille du tableau -->
                            <thead>
                                <tr>
                                    <th scope="col">Company</th>
                                    <th scope="col">Advertisements</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Type</th>
                                    <th scope="col">Time</th>
                                    <th scope="col">Date</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($affich as $pub)
                                <tr>
                                    <td>{{ $pub->company->name }}</td>
                                    <td>{{ $pub->advertisements }}</td>
                                    <td class="td">{{ substr($pub->description, 0, 50) }}...</td> <!-- On recupere que les 100 premiers caracteres -->
                                    <td>{{ $pub->type }}</td>
                                    <td>{{ $pub->time }}</td>
                                    <td>{{ $pub->date_pub }}</td>
                                    <td>
                                        <div class="dash" style="display: flex;width:100%;gap:8px;">
                                            <a href="/see-more/{{$pub->id}}" class="btn btn-primary"><i class="fa fa-eye"></i></a>
                                            <a href="/edit-advertisement/{{$pub->id}}" class="btn btn-warning" style="color: white;"><i class="fa fa-edit"></i></a>
                                            <form method="post" action="{{ route('destroy', ['id' => $pub]) }}">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="d-inline-block btn btn-danger" style="background-color: red;width:100%" onclick="return confirm('Do you want to delete this offer?')"><i class="fa fa-trash"></i></button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    {{ $affich->links() }}
                </div>
            </div>
            <br>
            <!-- Button For View Message -->
            <div class="movenofication" >
                <button data-bs-toggle="modal" data-bs-target="#exampleModal5">
                    <img src="{{ asset('assets/images/gmail.png') }}" alt="notification">
                </button>
            </div>
            <!-- POP UP For View Message -->
            <div class="modal fade" id="exampleModal5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <br>
                        <div class="fex-epi">
                            <img src="{{ asset('assets/images/supports.png') }}" style="width: 10%;" alt="notification">
                            <h1 class="modal-title" id="exampleModalLabel" style="text-align: center;">Epi.Job • Emails</h1>
                        </div>
                        <br>
                        <hr>
                            <div class="modal-body">
                                @foreach($mails as $content)
                                    <div class="alert alert-success" role="alert">
                                        <p> <b>{{$alert->user->first_name}} {{$alert->user->name}}</b> sent a message: <b>{{$content->content}}</b>,
                                            on : <b>{{$content->created_at}}</b>
                                        </p>
                                    </div>
                                @endforeach 
                            </div>
                            <div class="mb-3"></div>
                    </div>
                </div>
            </div>

        </div>
    </div>
     @endif 

    @if(auth()->check() && auth()->user()->role == 2) 

    <div class="container mt-4">
        <div class="table-responsive">
            <div class="btn mb-3" id="success-alert" style="width: 100%;">
                @if (Session::has('message'))
                <div class="alert alert-success" role="alert">
                    <ul>
                        <li>{{ Session::get('message') }}</li>
                    </ul>
                </div>
                @endif
            </div>
            <div class="btn mb-3" id="success-alert" style="width: 100%;">
                @if (Session::has('success'))
                <div class="alert alert-success" role="alert">
                    <ul>
                        <li>{{ Session::get('success') }}</li>
                    </ul>
                </div>
                @endif
                @if ($errors->has('resume'))
                <span class="text-danger">{{ $errors->first('resume') }}</span>
                @endif
            </div>
            @foreach ($affich as $pub)
            <div class="job">
                <div class="container-job">
                    <div class="job-desc">
                        <div class="one1">
                            <div class="job-nameimage">
                                <span><img width="5%" src="{{ asset('assets/images/supports.png') }}" alt=""></span>
                            </div>

                            <div class="two">
                                <div class="jobname">
                                    <h1>{{$pub->company->name}} </h1>
                                    <h2>
                                        {{ $pub->advertisements }}
                                    </h2>
                                </div>
                                <div class="box">
                                    <div class="div">{{$pub->type}}</div>
                                    <div class="div">{{$pub->time}}</div>
                                </div>

                                <div class="time">
                                    <p>Publish</p>
                                    <b>{{ $pub->date_pub }}</b>
                                </div>

                            </div>
                        </div>

                        <div class="right" id='rightover'>
                            <button href="#" class="btn btn-link more" style="color: white;" data-description="{{ $pub->id }}">See more</button>
                        </div>
                    </div>
                    <div class="descriptionoverlay" id="description-{{ $pub->id }}">
                        <div class="expli">
                            <h1 style="font-weight: 700;font-size:16px;">About a job</h1><br>
                            <p>{{ $pub->description }}</p>
                            <a href="/apply/{{$pub->id}}" class="btn btn-success">Apply now</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="page">
                {{ $affich->links() }}
            </div>

            <!-- <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Date of Advertisement</th>
                        <th>Company name</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($affich as $pub)
                    <tr>
                        <td>{{ $pub->advertisements }}</td>
                        <td>{{ $pub->description }}</td>
                        <td>{{ $pub->date_pub }}</td>
                        <td>{{ $pub->company->name }}</td>
                        <td>
                            <button href="" class="btn btn-link">see more</button>
                            <a href="/apply" class="btn btn-success">Apply now</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table> -->
            <!-- Affichage des liens de pagination -->
            <!-- {{ $affich->links() }} -->
        </div>
    </div>

    <!-- <div id="contact" class="contact-us section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.25s">
                    <form id="contact" action="" method="post">
                        <div class="row">
                            <div class="col-lg-6 offset-lg-3">
                                <div class="section-heading">
                                    <h6>Contact Us</h6>
                                    <h2>Any <em>Questions</em></h2>
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <div class="row">
                                    <form action="{{ route('send.email') }}" method="post">
                                        @csrf
                                        <div class="col-lg-6">
                                            <fieldset>
                                                <input type="name" placeholder="Name" autocomplete="on" value="{{ auth()->user()->name }}" disabled required>
                                                <input type="hidden" id="name" name="name" value="{{ auth()->user()->name }}">
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-6">
                                            <fieldset>
                                                <input type="first_name" placeholder="First_name" autocomplete="on" value="{{ auth()->user()->first_name }}" disabled required>
                                                <input type="hidden" id="first_name" name="first_name" value="{{ auth()->user()->first_name }}">
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-6">
                                            <fieldset>
                                                <input type="text" pattern="[^ @]*@[^ @]*" placeholder="Your Email" value="{{ auth()->user()->email }}" disabled required="">
                                                <input type="hidden" id="email" name="email" value="{{ auth()->user()->email }}">
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-6">
                                            <fieldset>
                                                <input type="subject" id="subject" name="subject" placeholder="Subject" autocomplete="on">
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-12">
                                            <fieldset>
                                                <textarea name="message" type="text" class="form-control" id="message" placeholder="Message" required=""></textarea>
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-12">
                                            <fieldset>
                                                <button type="submit" id="form-submit" class="main-button ">Send Message Now</button>
                                            </fieldset>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="contact-info">
                                    <ul>
                                        <li>
                                            <div class="icon">
                                                <img src="assets/images/contact-icon-01.png" alt="email icon">
                                            </div>
                                            <a href="#">info@epijob.eu</a>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <img src="assets/images/contact-icon-02.png" alt="phone">
                                            </div>
                                            <a href="#">01 44 08 00 50</a>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <img src="assets/images/contact-icon-03.png" alt="location">
                                            </div>
                                            <a href="#">24 rue Pasteur, 94270 Le KREMLIN BICÊTRE, France</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> -->
    @endif
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright © 2023 PreMSc Epitech - Paris, Ltd. All Rights Reserved.

                        <br>Web Designed by <a href="https://www.linkedin.com/in/guy-vincent-de-paul-mouyabi-ba2a0725b?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=ios_app">DePaulwin!</a> and <a href="www.linkedin.com/in/lysweb">Lys</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>
</x-app-layout>

<!-- Ajoutez cette balise script à votre fichier HTML ou à la section script de votre vue Blade -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const alertDivs = document.querySelectorAll('.alert.alert-success');

        alertDivs.forEach(function(alertDiv) {
            alertDiv.addEventListener('click', function() {
                this.style.display = 'none';
            });
        });
    });

    setTimeout(function() {
        var successAlert = document.getElementById('success-alert');
        if (successAlert) {
            successAlert.style.display = 'none';
        }
    }, 3000);
</script>