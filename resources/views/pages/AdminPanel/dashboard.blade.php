
<!DOCTYPE html>
<html lang="en" style="position: relative;min-height: 100%;">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Clearance</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href={{ URL::asset('css/ClientCSS/Contact-Form-Clean.css') }}>
    <link rel="stylesheet" href={{ URL::asset('css/ClientCSS/Footer-Clean.css') }}>
    <link rel="stylesheet" href={{ URL::asset('css/ClientCSS/Header-Blue.css') }}>
    <link rel="stylesheet" href={{ URL::asset('css/ClientCSS/styles.css') }}>
</head>

@extends('layouts.apps')
@section('content')

<div class="col-sm-12 text-left">
  <h1 class="border-bottom border-bot text-4xl font-bold pt-3">Dashboard</h1>
</div>
<div class="main-wrapper col-sm-12 text-left h-100 pr-0 pl-0 pt-2 text-white">
  <div class="flex flex-wrap pl-4 pr-4">
    <div class="col-sm-3 form-group text-center dashboard-box rounded-lg bg-gray-800 p-4 mb-4">
      <h5 class="mb-3">Registered Population</h5>
      <h1 class="mb-0">{{ $registered ?? '0' }}</h1>
    </div>
    <div class="col-sm-2 form-group text-center dashboard-box rounded-lg bg-gray-800 p-4 mb-4">
      <h5 class="mb-3">Males</h5>
      <h1 class="mb-0">{{ $male ?? '0' }}</h1>
    </div>
    <div class="col-sm-2 form-group text-center dashboard-box rounded-lg bg-gray-800 p-4 mb-4">
      <h5 class="mb-3">List of Request</h5>
      <h1 class="mb-0">{{ $certificate_requests ?? '0' }}</h1>
    </div>
    <div class="col-sm-2 form-group text-center dashboard-box rounded-lg bg-gray-800 p-4 mb-4">
      <h5 class="mb-3">Females</h5>
      <h1>{{ $female ?? '0' }}</h1>
    </div>
    <div class="col-sm-3 form-group text-center dashboard-box rounded-lg bg-gray-800 p-4 mb-4">
      <h5 class="mb-3">Registered Voter</h5>
      <h1>{{ $voter ?? '0' }}</h1>
    </div>
    <div class="col-sm-12 border border-bot"></div>
  </div>
  <div class="row pt-4 pl-4 pr-4">
    <div class="col-sm-8">
      <div class="table-responsive border rounded-lg">
        <div class="col-sm-12 bg-blue-900 text-white pt-2 pb-2 text-left rounded-t-lg">
          <h3 class="mb-0"><b>Barangay Current Member</b></h3>
        </div>
        <table class="table table-striped jambo_table bulk_action text-center">
          <thead>
            <tr class="headings">
              <th class="column-title">Name</th>
              <th class="column-title">Position</th>
              <th class="column-title">Year of Service</th>
              <th class="bulk-actions" hidden colspan="7">
                <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
              </th>
            </tr>
          </thead>
          <tbody>
            @if(count($brgy_official))
            @foreach ($brgy_official as $brgy_official)
            <tr class="even pointer">
              <td class="">{{ $brgy_official->name }}</td>
              <td class="">{{ $brgy_official->position }}</td>
              <td class="">{{ $brgy_official->year_of_service }}</td>
            </tr>
            @endforeach
            @endif
          </tbody>
        </table>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="table-responsive border rounded-lg text-center">
        <div class="col-sm-12 bg-blue-900 text-white pt-2 pb-2 text-left rounded-t-lg">
          <h3 class="mb-0"><b>Areas/Puroks</b></h3>
        </div>
        <table class="table table-striped jambo_table">
          <thead>
            <tr class="headings">
              <th class="column-title">Area</th>
              <th class="column-title">People</th>
            </tr>
          </thead>
          <tbody>
            @if(count($area_setting))
            @foreach ($area_setting as $area_setting)
            <tr class="even pointer">
              <td class="">{{ $area_setting->area }}</td>
              <td class="">{{ $area_setting->population ?? '0'}}</td>
            </tr>
            @endforeach
            @endif
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

</div>
@endsection

