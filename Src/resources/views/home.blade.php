@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Phone Number Generator</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('numberGenerator') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="contacts_count" class="col-md-4 col-form-label text-md-end">{{ __('Contacts Count') }}</label>

                            <div class="col-md-6">
                                <input id="contacts_count" type="number" name="contacts_count" class="form-control">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="phone_code" class="col-md-4 col-form-label text-md-end">{{ __('Phone Code') }}</label>

                            <div class="col-md-6">
                                <input id="phone_code" type="number" name="phone_code" class="form-control">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="number" class="col-md-4 col-form-label text-md-end">{{ __('Phone Number') }}</label>

                            <div class="col-md-6">
                                <input id="phone_number" type="number" class="form-control" name="phone_number" required >

                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="m-2 text-center">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Generate Contacts') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    <div class="col-md-8 pt-4">
        <div class="card">
            <div class="card-header" >Generated Contacts</div>
                <div class="card-body">
                    <p id="generated_contacts"></p>
                    
                </div>
            </div>
        </div>
    </div>

    </div>
</div>
@endsection
