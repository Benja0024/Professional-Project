@extends('admin.master')

@section('title', 'Profile')

@section('content')
            <!--**********************************
            Content body start
        ***********************************-->
					
			<div class="content-body " style="">
                <div class="container-fluid">
        <div class="row page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">App</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Profile</a></li>
            </ol>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="profile card card-body px-3 pt-3 pb-0">
                    <div class="profile-head">
                        <div class="photo-content">
                            <div class="cover-photo rounded"></div>
                        </div>
                        <div class="profile-info">
                            <div class="profile-photo">
                                <img src="{{ asset('storage/' . $admin->avatar) }}" class="img-fluid rounded-circle mt-5" alt="">
                            </div>
                            <div class="profile-details">
                                <div class="profile-name px-3 pt-2">
                                    <h4 class="text-primary mb-0 text-uppercase">{{ $admin->prenom }} {{ $admin->nom }}</h4>
                                    <p>{{ $admin->adresse }} | {{ $admin->telephone }}</p>
                                </div>
                                <div class="profile-email px-2 pt-2">
                                    <h4 class="text-muted mb-0">Email</h4>
                                    <p>{{ $admin->email }}</p>
                                </div>
                                <div class="dropdown ms-auto">
                                    <div class="col-xl-4 col-xxl-5 col-sm-5 sm-mt-auto mt-3 text-sm-end">
                                        <a href="{{ route('profile.edit', $admin) }}" class="btn btn-primary">Edition</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="col-xl-8">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="profile-tab">
                                <div class="custom-tab-1">
                                    <ul class="nav nav-tabs">
                                        <li class="nav-item"><a href="#about-me" data-bs-toggle="tab"
                                                class="nav-link">A propos</a>
                                        </li>
                                        <li class="nav-item"><a href="#profile-settings" data-bs-toggle="tab"
                                                class="nav-link">Edition</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div id="about-me" class="tab-pane fade active show">
                                            <div class="profile-about-me">
                                                <div class="pt-4 border-bottom-1 pb-3">
                                                    <h4>About Me</h4>
                                                    <p class="mb-2">A wonderful serenity has taken possession of my
                                                        entire soul, like these sweet mornings of spring which I enjoy
                                                        with my whole heart. I am alone, and feel the charm of existence
                                                        was created for the bliss of souls like mine.I am so happy, my
                                                        dear friend, so absorbed in the exquisite sense of mere tranquil
                                                        existence, that I neglect my talents.</p>
                                                    <p>A collection of textile samples lay spread out on the table -
                                                        Samsa was a travelling salesman - and above it there hung a
                                                        picture that he had recently cut out of an illustrated magazine
                                                        and housed in a nice, gilded frame.</p>
                                                </div>
                                            </div>
                                            <div class="profile-skills mb-5">
                                                <h4 class="mb-2">Skills</h4>
                                                <a href="javascript:void(0);"
                                                    class="btn btn-primary light btn-xs mb-1">Admin</a>
                                                <a href="javascript:void(0);"
                                                    class="btn btn-primary light btn-xs mb-1">Dashboard</a>
                                                <a href="javascript:void(0);"
                                                    class="btn btn-primary light btn-xs mb-1">Photoshop</a>
                                                <a href="javascript:void(0);"
                                                    class="btn btn-primary light btn-xs mb-1">Bootstrap</a>
                                                <a href="javascript:void(0);"
                                                    class="btn btn-primary light btn-xs mb-1">Responsive</a>
                                                <a href="javascript:void(0);"
                                                    class="btn btn-primary light btn-xs mb-1">Crypto</a>
                                            </div>
                                            <div class="profile-lang  mb-5">
                                                <h4 class="mb-2">Language</h4>
                                                <a href="javascript:void(0);"
                                                    class="btn btn-primary light btn-xs mb-1">English</a>
                                                <a href="javascript:void(0);"
                                                    class="btn btn-primary light btn-xs mb-1">Franch</a>
                                                <a href="javascript:void(0);"
                                                    class="btn btn-primary light btn-xs mb-1">German</a>
                                            </div>
                                            <div class="profile-personal-info">
                                                <h4 class="mb-4">Personal Information</h4>
                                                <div class="row mb-2">
                                                    <div class="col-sm-3 col-5">
                                                        <label class="form-label">Name :
                                                        </label>
                                                    </div>
                                                    <div class="col-sm-9 col-7"><span>Mitchell C.Shay</span>
                                                    </div>
                                                </div>
                                                <div class="row mb-2">
                                                    <div class="col-sm-3 col-5">
                                                        <label class="form-label">Email :
                                                        </label>
                                                    </div>
                                                    <div class="col-sm-9 col-7"><span>example@examplel.com</span>
                                                    </div>
                                                </div>
                                                <div class="row mb-2">
                                                    <div class="col-sm-3 col-5">
                                                        <label class="form-label">Availability :
                                                        </label>
                                                    </div>
                                                    <div class="col-sm-9 col-7"><span>Full Time (Free Lancer)</span>
                                                    </div>
                                                </div>
                                                <div class="row mb-2">
                                                    <div class="col-sm-3 col-5">
                                                        <label class="form-label">Age :
                                                        </label>
                                                    </div>
                                                    <div class="col-sm-9 col-7"><span>27</span>
                                                    </div>
                                                </div>
                                                <div class="row mb-2">
                                                    <div class="col-sm-3 col-5">
                                                        <label class="form-label">Location :
                                                        </label>
                                                    </div>
                                                    <div class="col-sm-9 col-7"><span>Rosemont Avenue Melbourne,
                                                            Florida</span>
                                                    </div>
                                                </div>
                                                <div class="row mb-2">
                                                    <div class="col-sm-3 col-5">
                                                        <label class="form-label">Year Experience :
                                                        </label>
                                                    </div>
                                                    <div class="col-sm-9 col-7"><span>07 Year Experiences</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="profile-settings" class="tab-pane fade">
                                            <div class="pt-3">
                                                <div class="settings-form">
                                                    <h4 class="card-title">Account Setting</h4>
                                                    <form>
                                                        <div class="row">
                                                            <div class="mb-3 col-md-6">
                                                                <label class="form-label">Email</label>
                                                                <input type="email" placeholder="Email"
                                                                    class="form-control">
                                                            </div>
                                                            <div class="mb-3 col-md-6">
                                                                <label class="form-label">Password</label>
                                                                <input type="password" placeholder="Password"
                                                                    class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="form-label">Address</label>
                                                            <input type="text" placeholder="1234 Main St"
                                                                class="form-control">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="form-label">Address 2</label>
                                                            <input type="text" placeholder="Apartment, studio, or floor"
                                                                class="form-control">
                                                        </div>
                                                        <div class="row">
                                                            <div class="mb-3 col-md-6">
                                                                <label class="form-label">City</label>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                            <div class="mb-3 col-md-4">
                                                                <label class="form-label">State</label>
                                                                <select class="form-control default-select wide"
                                                                    id="inputState">
                                                                    <option selected="">Choose...</option>
                                                                    <option>Option 1</option>
                                                                    <option>Option 2</option>
                                                                    <option>Option 3</option>
                                                                </select>
                                                            </div>
                                                            <div class="mb-3 col-md-2">
                                                                <label class="form-label">Zip</label>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="mb-3">
                                                            <div class="form-check custom-checkbox">
                                                                <input type="checkbox" class="form-check-input"
                                                                    id="gridCheck">
                                                                <label class="form-check-label form-label"
                                                                    for="gridCheck"> Check me out</label>
                                                            </div>
                                                        </div>
                                                        <button class="btn btn-primary" type="submit">Sign
                                                            in</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div> --}}
    </div>
            </div>    
            <!--**********************************
                Content body end
            ***********************************-->
@endsection