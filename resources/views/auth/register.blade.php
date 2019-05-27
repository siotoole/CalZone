@extends('layouts.app')

@section('content')
    <div class="card max-w-md mx-auto">
        <h2>{{ __('Register') }}</h2>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="form-tab">
                <div class="my-6">
                    <label class="block text-gray-600 mb-2" for="name">{{ __('Name') }}</label>
                    <input type="text"
                           name="name"
                           id="name"
                           class="form-input"
                           value="{{ old('name') }}"
                           required
                           autocomplete="name"
                           autofocus>

                </div>
                <div class="my-6">
                    <label class="block text-gray-600 mb-2" for="email">{{ __('E-Mail Address') }}</label>
                    <input type="email"
                           name="email"
                           id="email"
                           class="form-input"
                           value="{{ old('email') }}"
                           required
                           autocomplete="email"
                           autofocus>
                </div>
                <div class="my-6">
                    <label class="block text-gray-600 mb-2" for="password">{{ __('Password') }}</label>
                    <input type="password"
                           name="password"
                           id="password"
                           class="form-input"
                           required
                           autocomplete="new-password">
                </div>
                <div class="my-6">
                    <label class="block text-gray-600 mb-2" for="password-confirm">{{ __('Confirm Password') }}</label>
                    <input type="password"
                           name="password_confirmation"
                           id="password-confirm"
                           class="form-input"
                           required
                           autocomplete="new-password">
                </div>
            </div>
            <div class="form-tab">
                <div class="my-6">
                    <label class="block text-gray-600 mb-2" for="current-weight">{{ __('Current Weight') }}</label>
                    <input type="number"
                           name="weight"
                           id="current-weight"
                           class="form-input"
                           required
                           autocomplete="current-weight">
                </div>
                <div class="my-6">
                    <label class="block text-gray-600 mb-2" for="height">{{ __('Current Height') }}</label>
                    <input type="number"
                           name="height"
                           id="height"
                           class="form-input"
                           required
                           autocomplete="height">
                </div>
                <div class="my-6">
                    <label class="block text-gray-600 mb-2" for="gender">{{ __('Gender') }}</label>
                    <select name="gender"
                            id="gender"
                            class="form-input bg-white">
                        <option value="f">Female</option>
                        <option value="m">Male</option>
                    </select>
                </div>
                <div class="my-6">
                    <label class="block text-gray-600 mb-2" for="dob">{{ __('Date of Birth') }}</label>
                    <input type="date"
                           name="dob"
                           id="dob"
                           class="form-input"
                           required
                           autocomplete="dob">
                </div>
            </div>
            <div class="form-tab">
                <div class="my-6">
                    <label class="block text-gray-600mb-2" for="goal-weight">{{ __('Goal Weight') }}</label>
                    <input type="number"
                           name="goalWeight"
                           id="goal-weight"
                           class="form-input"
                           required
                           autocomplete="goal-weight">
                </div>
                <div class="my-6">
                    <label class="block text-gray-600 mb-2" for="weekly-goal">{{ __('Weekly Goal') }}</label>
                    <select name="weeklyGoal"
                            id="weekly-goal"
                            class="form-input bg-white"
                            required
                            autocomplete="weekly-goal">
                        <option value="2">Lose 2 pounds per week</option>
                        <option value="1.5">Lose 1.5 pounds per week</option>
                        <option value="1">Lose 1 pound per week</option>
                        <option value="0.5">Lose 0.5 pounds per week</option>
                    </select>
                </div>
            </div>
            <div class="mt-6 flex justify-end">
                <button class="button ml-6" type="submit">{{ __('Sign Up') }}</button>
            </div>
        </form>
    </div>
@endsection
