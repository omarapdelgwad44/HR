@extends('admin.layouts.master')
@section('title', 'General Setting')
@section('page_title', 'General Setting')
@section('content')
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0"><i class="fas fa-cog mr-2"></i>Company Settings</h5>
        </div>
        <div class="card-body">
            <form action="#" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="card mb-4 shadow-sm">
                            <div class="card-header bg-light">
                                <h6 class="mb-0">Company Information</h6>
                            </div>
                            <div class="card-body">
                                <div class="form-group mb-3">
                                    <label for="company_name" class="form-label font-weight-bold">Company Name</label>
                                    <input type="text" class="form-control" id="company_name" name="company_name" value="{{ $setting->company_name }}">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="company_logo" class="form-label font-weight-bold">Company Logo</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="company_logo" name="company_logo">
                                        <label class="custom-file-label" for="company_logo">Choose file</label>
                                    </div>
                                    @if($setting->company_logo)
                                        <div class="mt-2 text-center">
                                            <img src="{{ asset($setting->company_logo) }}" alt="Company Logo" class="img-thumbnail" style="max-height: 100px;">
                                        </div>
                                    @endif
                                </div>
                                <div class="form-group mb-3">
                                    <label for="company_phone" class="form-label font-weight-bold">Company Phone</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                        </div>
                                        <input type="text" class="form-control" id="company_phone" name="company_phone" value="{{ $setting->company_phone }}">
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="company_email" class="form-label font-weight-bold">Company Email</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                        </div>
                                        <input type="email" class="form-control" id="company_email" name="company_email" value="{{ $setting->company_email }}">
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="company_address" class="form-label font-weight-bold">Company Address</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
                                        </div>
                                        <textarea class="form-control" id="company_address" name="company_address" rows="3">{{ $setting->company_address }}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card mb-4 shadow-sm">
                            <div class="card-header bg-light">
                                <h6 class="mb-0">System Configuration</h6>
                            </div>
                            <div class="card-body">
                                <div class="form-group mb-3">
                                    <label for="after_min_calc_delay" class="form-label font-weight-bold">After Min Calc Delay</label>
                                    <input type="number" step="0.01" class="form-control" id="after_min_calc_delay" name="after_min_calc_delay" value="{{ $setting->after_min_calc_delay }}">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="after_min_calc_early_departure" class="form-label font-weight-bold">After Min Calc Early Departure</label>
                                    <input type="number" step="0.01" class="form-control" id="after_min_calc_early_departure" name="after_min_calc_early_departure" value="{{ $setting->after_min_calc_early_departure }}">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="after_min_quarter_day" class="form-label font-weight-bold">After Min Quarter Day</label>
                                    <input type="number" step="0.01" class="form-control" id="after_min_quarter_day" name="after_min_quarter_day" value="{{ $setting->after_min_quarter_day }}">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="after_min_half_daycut" class="form-label font-weight-bold">After Min Half Day Cut</label>
                                    <input type="number" step="0.01" class="form-control" id="after_min_half_daycut" name="after_min_half_daycut" value="{{ $setting->after_min_half_daycut }}">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="after_min_full_daycut" class="form-label font-weight-bold">After Min Full Day Cut</label>
                                    <input type="number" step="0.01" class="form-control" id="after_min_full_daycut" name="after_min_full_daycut" value="{{ $setting->after_min_full_daycut }}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card mb-4 shadow-sm">
                            <div class="card-header bg-light">
                                <h6 class="mb-0">Vacation Settings</h6>
                            </div>
                            <div class="card-body">
                                <div class="form-group mb-3">
                                    <label for="monthly_vecation_balance" class="form-label font-weight-bold">Monthly Vacation Balance</label>
                                    <input type="number" step="0.01" class="form-control" id="monthly_vecation_balance" name="monthly_vecation_balance" value="{{ $setting->monthly_vecation_balance }}">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="after_days_begin_vacation" class="form-label font-weight-bold">After Days Begin Vacation</label>
                                    <input type="number" step="0.01" class="form-control" id="after_days_begin_vacation" name="after_days_begin_vacation" value="{{ $setting->after_days_begin_vacation }}">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="first_balance_begin_vacation" class="form-label font-weight-bold">First Balance Begin Vacation</label>
                                    <input type="number" step="0.01" class="form-control" id="first_balance_begin_vacation" name="first_balance_begin_vacation" value="{{ $setting->first_balance_begin_vacation }}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card mb-4 shadow-sm">
                            <div class="card-header bg-light">
                                <h6 class="mb-0">Absence Sanctions</h6>
                            </div>
                            <div class="card-body">
                                <div class="form-group mb-3">
                                    <label for="sanction_value_first_absence" class="form-label font-weight-bold">Sanction Value First Absence</label>
                                    <input type="number" step="0.01" class="form-control" id="sanction_value_first_absence" name="sanction_value_first_absence" value="{{ $setting->sanction_value_first_absence }}">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="sanction_value_second_absence" class="form-label font-weight-bold">Sanction Value Second Absence</label>
                                    <input type="number" step="0.01" class="form-control" id="sanction_value_second_absence" name="sanction_value_second_absence" value="{{ $setting->sanction_value_second_absence }}">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="sanction_value_third_absence" class="form-label font-weight-bold">Sanction Value Third Absence</label>
                                    <input type="number" step="0.01" class="form-control" id="sanction_value_third_absence" name="sanction_value_third_absence" value="{{ $setting->sanction_value_third_absence }}">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="sanction_value_fourth_absence" class="form-label font-weight-bold">Sanction Value Fourth Absence</label>
                                    <input type="number" step="0.01" class="form-control" id="sanction_value_fourth_absence" name="sanction_value_fourth_absence" value="{{ $setting->sanction_value_fourth_absence }}">
                                </div>
                            </div>
                        </div>

                        <div class="card mb-4 shadow-sm">
                            <div class="card-header bg-light">
                                <h6 class="mb-0">System Status</h6>
                            </div>
                            <div class="card-body">
                                <div class="form-group mb-0">
                                    <label for="system_status" class="form-label font-weight-bold">System Status</label>
                                    <select class="form-control" id="system_status" name="system_status">
                                        <option value="1" {{ $setting->system_status ? 'selected' : '' }}>Active</option>
                                        <option value="0" {{ !$setting->system_status ? 'selected' : '' }}>Inactive</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12 text-center">
                        <button type="submit" class="btn btn-primary btn-lg px-5">
                            <i class="fas fa-save mr-2"></i>Save Changes
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection