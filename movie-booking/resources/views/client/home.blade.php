@extends('layout')

@section('content')
<div class="container-fluid">
    <h3 class="fw-bold mb-4">Phim đang chiếu</h3>

    <div class="row gy-4">
        @forelse($movies as $movie)
            <div class="col-md-6 col-lg-4">
                <div class="d-flex border rounded shadow-sm p-3 h-100">
                    {{-- Poster --}}
                    <div style="min-width: 130px">
                        <img src="{{ $movie->poster }}"
                             class="img-fluid rounded"
                             style="height: 200px; object-fit: cover;"
                             alt="{{ $movie->title }}">
                    </div>

                    {{-- Nội dung --}}
                    <div class="ms-3 d-flex flex-column justify-content-between w-100">
                        <div>
                            <h5 class="text-uppercase fw-bold mb-2">{{ $movie->title }}</h5>
                            <p class="mb-1"><i class="bi bi-tags text-primary"></i> {{ $movie->genre }}</p>
                            <p class="mb-1"><i class="bi bi-clock text-primary"></i> {{ $movie->duration }} phút</p>
                            <p class="mb-2"><strong>2D Phụ Đề</strong></p>

                            {{-- Giờ chiếu --}}
                            <div class="d-flex flex-wrap gap-2">
                                @foreach($movie->showtimes as $showtime)
                                    <a href="{{ route('booking.create', ['movie' => $movie->id, 'time' => $showtime->time]) }}"
                                       class="btn btn-success btn-sm">
                                        {{ $showtime->time }}
                                    </a>
                                @endforeach
                            </div>
                        </div>

                        {{-- Nút đặt vé chính --}}
                        <a href=""
                           class="btn btn-danger w-100 mt-3 fw-semibold">
                            Đặt vé
                        </a>
                    </div>
                </div>
            </div>
        @empty
            <p class="text-center">Hiện tại chưa có phim nào đang chiếu.</p>
        @endforelse
    </div>
</div>
@endsection
