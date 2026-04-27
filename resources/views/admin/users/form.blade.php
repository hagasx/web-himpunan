@extends('layouts.admin')

@section('header', isset($user) ? 'Edit Anggota' : 'Tambah Anggota Baru')

@section('content')
<div class="glass-card" style="text-align: left; max-width: 600px;">
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
        <h3 style="margin: 0;">{{ isset($user) ? 'Form Edit Anggota' : 'Form Tambah Anggota' }}</h3>
        <a href="{{ route('admin.users.index') }}" class="btn-sm btn-info" style="text-decoration: none;">
            <i class='bx bx-arrow-back'></i> Kembali
        </a>
    </div>

    @if ($errors->any())
        <div class="alert-error">
            <ul style="margin: 0; padding-left: 20px;">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ isset($user) ? route('admin.users.update', $user->id) : route('admin.users.store') }}" method="POST">
        @csrf
        @if(isset($user))
            @method('PUT')
        @endif

        <div style="margin-bottom: 15px;">
            <label for="name" style="display: block; margin-bottom: 5px; color: #fff;">Nama Lengkap</label>
            <input type="text" id="name" name="name" class="form-control" value="{{ old('name', $user->name ?? '') }}" required style="width: 100%; padding: 10px; background: rgba(255, 255, 255, 0.05); border: 1px solid rgba(255, 215, 0, 0.3); border-radius: 8px; color: #fff;">
        </div>

        <div style="margin-bottom: 15px;">
            <label for="email" style="display: block; margin-bottom: 5px; color: #fff;">Email</label>
            <input type="email" id="email" name="email" class="form-control" value="{{ old('email', $user->email ?? '') }}" required style="width: 100%; padding: 10px; background: rgba(255, 255, 255, 0.05); border: 1px solid rgba(255, 215, 0, 0.3); border-radius: 8px; color: #fff;">
        </div>

        <div style="margin-bottom: 20px;">
            <label for="password" style="display: block; margin-bottom: 5px; color: #fff;">Password {{ isset($user) ? '(Kosongkan jika tidak ingin mengubah)' : '' }}</label>
            <input type="password" id="password" name="password" class="form-control" {{ isset($user) ? '' : 'required' }} style="width: 100%; padding: 10px; background: rgba(255, 255, 255, 0.05); border: 1px solid rgba(255, 215, 0, 0.3); border-radius: 8px; color: #fff;">
        </div>

        <button type="submit" class="btn btn-gold" style="width: 100%; border: none; cursor: pointer; padding: 10px 15px; font-family: 'Outfit', sans-serif; font-size: 1rem; font-weight: 600;">
            {{ isset($user) ? 'Simpan Perubahan' : 'Simpan Anggota' }}
        </button>
    </form>
</div>
@endsection
