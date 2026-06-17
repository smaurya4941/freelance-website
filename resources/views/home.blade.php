@extends('layouts.app')

@section('title', 'Bizwoke - Modern Web Solutions')

@section('content')
    @include('sections.hero')
    @include('sections.problem_solution')
    @include('sections.services')
    @include('sections.about')
    @include('sections.why_choose_me')
    @include('sections.process')
    @include('sections.projects')
    @include('sections.testimonials')
    @include('sections.estimator_preview')
    @include('sections.pricing')
    @include('sections.faq')
@endsection
