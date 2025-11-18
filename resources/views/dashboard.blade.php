@extends('layouts.index')
@section('title', 'Dashboard')
@section('head')

{{-- Bagian Head: Pastikan semua aset dan library CSS/JS dimuat --}}
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dashboard Kasir - WARUNGIN</title>

{{-- Favicon --}}
<link rel="icon" type="image/png" href="{{ asset('image/warungin_logo.png') }}">

{{-- Tailwind CSS & App Scripts (Menggunakan Vite) --}}
@vite(['resources/css/app.css', 'resources/js/app.js']) 

{{-- Font Awesome (untuk semua ikon) --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

@section('content')
<div class="flex h-screen overflow-hidden bg-gray-50">
    
    {{-- Sidebar Placeholder (Jika tidak di-include dari layouts.index) --}}
    {{-- Jika sidebar di-include dari sini, letakkan kode sidebar di sini --}}
    {{-- Contoh struktur sidebar minimal --}}
    <div class="w-64 bg-white shadow-xl flex flex-col flex-shrink-0">
        {{-- WARUNGIN Logo/Nama --}}
        <div class="flex items-center p-6 border-b border-gray-100">
            <h1 class="text-xl font-semibold text-gray-800">WARUNGIN</h1>
        </div>
    </div>
    
    <div class="flex-1 flex flex-col overflow-y-auto overflow-x-hidden">
        
        <header class="flex items-center justify-between p-4 bg-white border-b border-gray-100 shadow-sm sticky top-0 z-10">
            
            <div class="relative w-96">
                <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                    <i class="fas fa-search text-gray-400"></i> 
                </span>
                <input class="w-full pl-10 pr-4 py-2 rounded-lg border border-gray-200 focus:outline-none focus:ring-1 focus:ring-blue-500" 
                        type="text" 
                        placeholder="Search...">
                        @endsection
                    </div>