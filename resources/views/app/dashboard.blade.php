@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')
  <!-- Stats Cards -->
  <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-4 lg:gap-6 mb-6 lg:mb-8">
    <!-- Today -->
    <div class="stat-card bg-pearl rounded-2xl p-5 border border-sand">
      <div class="flex items-start justify-between mb-4">
        <div class="w-12 h-12 bg-teal/10 rounded-xl flex items-center justify-center">
          <svg class="w-6 h-6 text-teal" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
          </svg>
        </div>
        <span class="text-xs font-medium text-teal bg-teal/10 px-2 py-1 rounded-full">Hari Ini</span>
      </div>
      <p class="text-mist text-sm mb-1">Total Kunjungan</p>
      <p class="text-3xl font-bold text-navy">{{ number_format($stats['today']) }}</p>
    </div>

    <!-- This Month -->
    <div class="stat-card bg-pearl rounded-2xl p-5 border border-sand">
      <div class="flex items-start justify-between mb-4">
        <div class="w-12 h-12 bg-navy/10 rounded-xl flex items-center justify-center">
          <svg class="w-6 h-6 text-navy" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
          </svg>
        </div>
        <span class="text-xs font-medium text-navy bg-navy/10 px-2 py-1 rounded-full">Bulan Ini</span>
      </div>
      <p class="text-mist text-sm mb-1">Total Kunjungan</p>
      <p class="text-3xl font-bold text-navy">{{ number_format($stats['month']) }}</p>
    </div>

    <!-- This Year -->
    <div class="stat-card bg-pearl rounded-2xl p-5 border border-sand">
      <div class="flex items-start justify-between mb-4">
        <div class="w-12 h-12 bg-amber/10 rounded-xl flex items-center justify-center">
          <svg class="w-6 h-6 text-amber" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
          </svg>
        </div>
        <span class="text-xs font-medium text-amber bg-amber/10 px-2 py-1 rounded-full">Tahun Ini</span>
      </div>
      <p class="text-mist text-sm mb-1">Total Kunjungan</p>
      <p class="text-3xl font-bold text-navy">{{ number_format($stats['year']) }}</p>
    </div>

    <!-- All Time -->
    <div class="stat-card rounded-2xl p-5" style="background: linear-gradient(135deg, #0b1929, #16304d);">
      <div class="flex items-start justify-between mb-4">
        <div class="w-12 h-12 rounded-xl flex items-center justify-center" style="background: rgba(255,255,255,0.1);">
          <svg class="w-6 h-6" style="color: #fdfaf5;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
          </svg>
        </div>
        <span class="text-xs font-medium px-2 py-1 rounded-full"
          style="color: rgba(253,250,245,0.8); background: rgba(255,255,255,0.1);">Semua</span>
      </div>
      <p class="text-sm mb-1" style="color: rgba(255,255,255,0.6);">
        Total Semua Kunjungan
      </p>
      <p class="text-3xl font-bold" style="color: #fdfaf5;">{{ number_format($stats['total']) }}</p>
    </div>
  </div>

  <!-- Chart & Recent Visits -->
  <div class="grid grid-cols-1 xl:grid-cols-3 gap-4 lg:gap-6">
    <!-- Chart -->
    <div class="xl:col-span-2 bg-pearl rounded-2xl border border-sand p-5 lg:p-6">
      <div class="flex items-center justify-between mb-6">
        <div>
          <h3 class="text-navy font-semibold text-lg">
            Statistik Kunjungan
          </h3>
          <p class="text-mist text-sm" id="chartSubtitle">
            Kunjungan per bulan tahun {{ $defaultYear }}
          </p>
        </div>
        <select id="yearFilter" class="bg-sand border-0 rounded-lg px-3 py-2 text-sm text-navy font-medium focus:ring-2 focus:ring-teal cursor-pointer">
          @foreach ($availableYears as $year)
            <option value="{{ $year }}" {{ $year == $defaultYear ? 'selected' : '' }}>{{ $year }}</option>
          @endforeach
        </select>
      </div>

      <!-- Bar Chart -->
      <div class="flex items-end justify-between gap-2 h-64" id="chartContainer">
        <!-- Bars will be rendered by JS -->
      </div>

      <!-- Legend -->
      <div class="flex items-center justify-center gap-6 mt-6 pt-4 border-t border-sand">
        <div class="flex items-center gap-2">
          <div class="w-3 h-3 bg-teal rounded-sm"></div>
          <span class="text-sm text-mist">Kunjungan</span>
        </div>
        <div class="flex items-center gap-2">
          <div class="w-3 h-3 bg-amber rounded-sm"></div>
          <span class="text-sm text-mist">Rata-rata</span>
        </div>
      </div>
    </div>

    <!-- Recent Visits -->
    <div class="bg-pearl rounded-2xl border border-sand p-5 lg:p-6">
      <div class="flex items-center justify-between mb-5">
        <h3 class="text-navy font-semibold text-lg">
          Kunjungan Terakhir
        </h3>
        <a href="{{ route('visiting.index') }}"
          class="text-teal text-sm font-medium hover:text-teal-light transition-colors">Lihat
          Semua</a>
      </div>

      <div class="space-y-3" id="recentVisits">
        <!-- Visits will be rendered by JS -->
      </div>
    </div>
  </div>

  <script>
    window.dashboardData = {
      monthly: @json($monthlyData),
      allYears: @json($allYearsData),
      defaultYear: {{ $defaultYear }},
      recent: @json($recentVisits)
    };

    // Year filter change → re-render chart
    document.addEventListener('DOMContentLoaded', function() {
      var yearSelect = document.getElementById('yearFilter');
      if (yearSelect) {
        yearSelect.addEventListener('change', function() {
          var selectedYear = parseInt(this.value);
          var yearData = window.dashboardData.allYears[selectedYear];
          document.getElementById('chartSubtitle').textContent = 'Kunjungan per bulan tahun ' + selectedYear;
          renderChartWithData(yearData);
        });
      }
    });
  </script>
@endsection
