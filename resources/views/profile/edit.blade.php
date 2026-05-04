@extends('layouts.admin')

@section('header', 'Profil Saya')

@section('content')
<div class="glass-card" style="max-width: 800px; margin: 0 auto; text-align: left;">
    <h3 style="margin-top: 0; color: #FFD700; border-bottom: 1px solid rgba(255,215,0,0.2); padding-bottom: 10px;">Edit Profil Anggota</h3>

    <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div style="display: flex; gap: 30px; flex-wrap: wrap; margin-bottom: 20px;">
            <!-- Profile Picture Section -->
            <div style="flex: 1; min-width: 200px; text-align: center;">
                <div style="margin-bottom: 15px;">
                    @if(auth()->user()->foto_profil)
                        <img src="{{ asset('storage/' . auth()->user()->foto_profil) }}" alt="Foto Profil" style="width: 150px; height: 150px; object-fit: cover; border-radius: 50%; border: 3px solid #FFD700; box-shadow: 0 0 15px rgba(255,215,0,0.3);">
                    @else
                        <div style="width: 150px; height: 150px; border-radius: 50%; border: 3px solid rgba(255,215,0,0.5); display: flex; align-items: center; justify-content: center; margin: 0 auto; background: rgba(255,255,255,0.05);">
                            <i class='bx bx-user' style="font-size: 4rem; color: #ccc;"></i>
                        </div>
                    @endif
                </div>
                
                <div style="margin-bottom: 15px;">
                    <label style="display: block; margin-bottom: 8px; color: #ccc; font-size: 0.9rem;">Ganti Foto Profil</label>
                    <input type="file" name="foto_profil" class="form-control" style="width: 100%; padding: 10px; border-radius: 8px; border: 1px solid rgba(255, 255, 255, 0.2); background: rgba(255, 255, 255, 0.05); color: #fff;" accept="image/*">
                    @error('foto_profil')
                        <span style="color: #ff4d4d; font-size: 0.85rem; display: block; margin-top: 5px;">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <!-- Profile Details Section -->
            <div style="flex: 2; min-width: 300px;">
                <div style="margin-bottom: 20px;">
                    <label style="display: block; margin-bottom: 8px; color: #ccc;">Nama Lengkap</label>
                    <input type="text" name="name" value="{{ old('name', auth()->user()->name) }}" class="form-control" required style="width: 100%; padding: 12px; border-radius: 8px; border: 1px solid rgba(255, 255, 255, 0.2); background: rgba(255, 255, 255, 0.05); color: #fff;">
                    @error('name')
                        <span style="color: #ff4d4d; font-size: 0.85rem; display: block; margin-top: 5px;">{{ $message }}</span>
                    @enderror
                </div>

                <div style="margin-bottom: 20px;">
                    <label style="display: block; margin-bottom: 8px; color: #ccc;">Bio</label>
                    <textarea name="bio" class="form-control" rows="4" placeholder="Ceritakan sedikit tentang dirimu..." style="width: 100%; padding: 12px; border-radius: 8px; border: 1px solid rgba(255, 255, 255, 0.2); background: rgba(255, 255, 255, 0.05); color: #fff; resize: vertical;">{{ old('bio', auth()->user()->bio) }}</textarea>
                    @error('bio')
                        <span style="color: #ff4d4d; font-size: 0.85rem; display: block; margin-top: 5px;">{{ $message }}</span>
                    @enderror
                </div>

                <div style="margin-bottom: 20px;">
                    <label style="display: block; margin-bottom: 8px; color: #ccc;">Password Baru (Kosongkan jika tidak ingin ganti)</label>
                    <input type="password" name="password" class="form-control" style="width: 100%; padding: 12px; border-radius: 8px; border: 1px solid rgba(255, 255, 255, 0.2); background: rgba(255, 255, 255, 0.05); color: #fff;">
                    @error('password')
                        <span style="color: #ff4d4d; font-size: 0.85rem; display: block; margin-top: 5px;">{{ $message }}</span>
                    @enderror
                </div>

                <div style="margin-bottom: 20px;">
                    <label style="display: block; margin-bottom: 8px; color: #ccc;">Konfirmasi Password Baru</label>
                    <input type="password" name="password_confirmation" class="form-control" style="width: 100%; padding: 12px; border-radius: 8px; border: 1px solid rgba(255, 255, 255, 0.2); background: rgba(255, 255, 255, 0.05); color: #fff;">
                </div>
            </div>
        </div>

        <div style="text-align: right; margin-top: 20px; border-top: 1px solid rgba(255,215,0,0.2); padding-top: 20px;">
            <button type="submit" class="btn btn-gold" style="padding: 12px 25px; border-radius: 8px; border: none; cursor: pointer; font-weight: 600; background: #FFD700; color: #1a1a2e; transition: all 0.3s ease;">
                <i class='bx bx-save'></i> Simpan Perubahan
            </button>
        </div>
    </form>
</div>
@endsection
