@extends('layouts.app')

@section('title', 'Get a Quote — Develeco Trading and Contracting WLL')

@section('content')

    <section class="jarallax relative overflow-hidden z-1000 padding-top">
        <img src="{{ asset('images/background/architecture-8254661.jpg') }}" class="jarallax-img page-banner-zoom" alt="">
        <div class="sw-overlay op-5"></div>
        <div class="gradient-edge-start light w-40 start-40 op-9 z-2"></div>
        <div class="abs w-40 h-100 bg-white top-0 start-0 op-9 z-2"></div>
        <div class="container relative z-2">
            <div class="row wow fadeInRight">
                <div class="col-lg-10">
                    <h1 class="fs-sm-10vw mb-0">Get a Quote</h1>
                    <ul class="crumb">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li class="active">Get a Quote</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row g-4 justify-content-center">
                <div class="col-lg-8">

                    @if(session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    <form method="POST" action="{{ route('quote.submit') }}" class="position-relative z1000">
                        @csrf
                        <div class="row g-4">

                            <!-- Personal Details -->
                            <div class="col-12">
                                <h4>Personal Information</h4>
                            </div>

                            <div class="col-md-6">
                                <div class="field-set">
                                    <label>Full Name *</label>
                                    <input type="text" name="name" class="form-control" placeholder="Your full name" value="{{ old('name') }}" required>
                                    @error('name') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="field-set">
                                    <label>Email *</label>
                                    <input type="email" name="email" class="form-control" placeholder="your@email.com" value="{{ old('email') }}" required>
                                    @error('email') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="field-set">
                                    <label>Phone *</label>
                                    <input type="text" name="phone" class="form-control" placeholder="+974 XXXX XXXX" value="{{ old('phone') }}" required>
                                    @error('phone') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="field-set">
                                    <label>Company Name (Optional)</label>
                                    <input type="text" name="company" class="form-control" placeholder="Your company" value="{{ old('company') }}">
                                </div>
                            </div>

                            <!-- Project Details -->
                            <div class="col-12 pt-4">
                                <h4>Project Details</h4>
                            </div>

                            <div class="col-md-6">
                                <div class="field-set">
                                    <label>Service Required *</label>
                                    <div class="relative">
                                        <select name="project_type" class="form-control" required>
                                            <option value="">Select a Service</option>
                                            <option {{ old('project_type') == 'Steel Structures' ? 'selected' : '' }}>Steel Structures</option>
                                            <option {{ old('project_type') == 'Civil Contracting' ? 'selected' : '' }}>Civil Contracting</option>
                                            <option {{ old('project_type') == 'Glass & Aluminium' ? 'selected' : '' }}>Glass &amp; Aluminium</option>
                                            <option {{ old('project_type') == 'Video Wall' ? 'selected' : '' }}>Video Wall</option>
                                            <option {{ old('project_type') == 'MEP Works' ? 'selected' : '' }}>MEP Works</option>
                                            <option {{ old('project_type') == 'Interior & Fitout' ? 'selected' : '' }}>Interior &amp; Fitout</option>
                                            <option {{ old('project_type') == 'Other' ? 'selected' : '' }}>Other</option>
                                        </select>
                                        <i class="absolute top-0 end-0 id-color pt-3 pe-3 icofont-simple-down"></i>
                                    </div>
                                    @error('project_type') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                            </div>

                            <!-- Budget -->
                            <div class="col-md-6">
                                <div class="field-set">
                                    <label>Estimated Budget</label>
                                    <div class="relative">
                                        <select name="budget" class="form-control">
                                            <option value="">Select Budget Range</option>
                                            <option {{ old('budget') == 'Below QAR 50,000' ? 'selected' : '' }}>Below QAR 50,000</option>
                                            <option {{ old('budget') == 'QAR 50,000 - 200,000' ? 'selected' : '' }}>QAR 50,000 – 200,000</option>
                                            <option {{ old('budget') == 'QAR 200,000 - 500,000' ? 'selected' : '' }}>QAR 200,000 – 500,000</option>
                                            <option {{ old('budget') == 'QAR 500,000 - 1,000,000' ? 'selected' : '' }}>QAR 500,000 – 1,000,000</option>
                                            <option {{ old('budget') == 'Above QAR 1,000,000' ? 'selected' : '' }}>Above QAR 1,000,000</option>
                                        </select>
                                        <i class="absolute top-0 end-0 id-color pt-3 pe-3 icofont-simple-down"></i>
                                    </div>
                                </div>
                            </div>

                            <!-- Timeline -->
                            <div class="col-md-6">
                                <div class="field-set">
                                    <label>Project Timeline *</label>
                                    <div class="relative">
                                        <select name="timeline" class="form-control" required>
                                            <option value="">Select Timeline</option>
                                            <option {{ old('timeline') == 'Urgent (Within 1 Month)' ? 'selected' : '' }}>Urgent (Within 1 Month)</option>
                                            <option {{ old('timeline') == '1 - 3 Months' ? 'selected' : '' }}>1 – 3 Months</option>
                                            <option {{ old('timeline') == '3 - 6 Months' ? 'selected' : '' }}>3 – 6 Months</option>
                                            <option {{ old('timeline') == '6 - 12 Months' ? 'selected' : '' }}>6 – 12 Months</option>
                                            <option {{ old('timeline') == 'More Than 1 Year' ? 'selected' : '' }}>More Than 1 Year</option>
                                        </select>
                                        <i class="absolute top-0 end-0 id-color pt-3 pe-3 icofont-simple-down"></i>
                                    </div>
                                    @error('timeline') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                            </div>

                            <!-- Preferred Start Date -->
                            <div class="col-md-6">
                                <div class="field-set">
                                    <label>Preferred Start Date</label>
                                    <input type="date" name="start_date" class="form-control" value="{{ old('start_date') }}">
                                </div>
                            </div>

                            <!-- Project Description -->
                            <div class="col-md-12">
                                <div class="field-set">
                                    <label>Project Description *</label>
                                    <textarea name="project_description" class="form-control" rows="6" placeholder="Describe your project requirements, scope, and any specific needs..." required>{{ old('project_description') }}</textarea>
                                    @error('project_description') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                            </div>

                            <!-- Submit -->
                            <div class="col-md-12">
                                <button type="submit" class="btn-main fx-slide"><span>Submit Quotation Request</span></button>
                                <p class="mt-3 text-muted small">We respect your privacy. Your information will not be shared with third parties.</p>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection
