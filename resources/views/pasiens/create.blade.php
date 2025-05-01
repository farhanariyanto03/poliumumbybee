@extends('layouts.master')
@section('title', 'Pendaftaran Baru')

@push('styles')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    @include('includes.sidebar') <!-- Jika sidebar di include -->
@endpush

@section('pageContent')
<div class="container-fluid py-4">
    <ul class="nav nav-tabs mb-4" id="wizardTabs" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#step1">Pendaftaran</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link disabled" data-bs-toggle="tab" data-bs-target="#step2">Pemeriksaan Awal</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link disabled" data-bs-toggle="tab" data-bs-target="#step3">Diagnosa</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link disabled" data-bs-toggle="tab" data-bs-target="#step4">Farmasi</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link disabled" data-bs-toggle="tab" data-bs-target="#step5">Pembayaran</button>
        </li>
    </ul>

    <form action="{{ route('pendaftaran.store') }}" method="POST" class="validation-wizard wizard-circle">
        @csrf

        <div class="tab-content" id="wizardTabsContent">
            <div class="tab-pane fade show active" id="step1" role="tabpanel">
                @include('components.form.step1')
            </div>
            <div class="tab-pane fade" id="step2" role="tabpanel">
                @include('components.form.step2')
            </div>
            <div class="tab-pane fade" id="step3" role="tabpanel">
                @include('components.form.step3')
            </div>
            <div class="tab-pane fade" id="step4" role="tabpanel">
                @include('components.form.step4')
            </div>
            <div class="tab-pane fade" id="step5" role="tabpanel">
                @include('components.form.step5')
            </div>
        </div>

        <div class="d-flex justify-content-between mt-4">
            <button type="button" class="btn btn-secondary" onclick="prevStep()">Previous</button>
            <button type="button" class="btn btn-primary" onclick="nextStep()">Next</button>
        </div>
    </form>
</div>
@endsection

@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-steps/1.1.0/jquery.steps.min.js"></script>
<script>
let currentStep = 0;
const tabs = document.querySelectorAll('.tab-pane');
const tabButtons = document.querySelectorAll('.nav-tabs .nav-link');

function nextStep() {
    if (currentStep < tabs.length - 1) {
        tabs[currentStep].classList.remove('show', 'active');
        tabButtons[currentStep].classList.remove('active');
        currentStep++;
        tabs[currentStep].classList.add('show', 'active');
        tabButtons[currentStep].classList.add('active');
    }
}

function prevStep() {
    if (currentStep > 0) {
        tabs[currentStep].classList.remove('show', 'active');
        tabButtons[currentStep].classList.remove('active');
        currentStep--;
        tabs[currentStep].classList.add('show', 'active');
        tabButtons[currentStep].classList.add('active');
    }
}
</script>
@endpush