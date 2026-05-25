<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-4 lg:flex-row lg:items-center lg:justify-between">
            <div>
                <h2 class="text-3xl font-light text-gray-500 leading-tight">Good Morning, <span class="font-semibold text-gray-900">John Doe</span></h2>
                <p class="text-sm text-gray-500 mt-1">Your performance summary this week</p>
            </div>
            <div class="flex flex-wrap items-center gap-2 lg:justify-end">
                <button type="button" class="rounded-md border border-gray-200 bg-white px-3 py-2 text-[11px] font-medium text-gray-500">Select Category</button>
                <button type="button" class="rounded-md border border-gray-200 bg-white px-3 py-2 text-[11px] font-medium text-gray-500">{{ now()->format('m/d/Y') }}</button>
                <button type="button" class="rounded-md border border-gray-200 bg-white px-3 py-2 text-[11px] font-medium text-gray-600">Share</button>
                <button type="button" class="rounded-md border border-gray-200 bg-white px-3 py-2 text-[11px] font-medium text-gray-600">Print</button>
                <button type="button" class="rounded-md bg-indigo-600 px-3 py-2 text-[11px] font-medium text-white">Export</button>
            </div>
        </div>
    </x-slot>

    <div class="bg-[#f5f7fb] py-8">
        <div class="mx-auto max-w-[1380px] px-4 sm:px-6 lg:px-8">
            <div class="grid gap-5 lg:grid-cols-[230px_minmax(0,1fr)]">
                <aside class="hidden lg:block">
                    <div class="sticky top-24 rounded-lg border border-[#e8ecf3] bg-white p-4 shadow-[0_1px_2px_rgba(16,24,40,0.04)]">
                        <div class="mb-5 flex items-center gap-2">
                            <span class="inline-flex h-8 w-8 items-center justify-center rounded-md bg-indigo-600 text-xs font-bold text-white">SA</span>
                            <div>
                                <p class="text-sm font-semibold text-slate-900">StarAdmin</p>
                                <p class="text-[11px] text-slate-500">ERP Suite</p>
                            </div>
                        </div>

                        <nav class="space-y-5 text-[13px]">
                            <div>
                                <p class="mb-2 px-2 text-[10px] font-semibold uppercase tracking-[0.08em] text-slate-400">Default</p>
                                <ul class="space-y-1">
                                    <li><a href="#" class="flex items-center justify-between rounded-md bg-indigo-50 px-2.5 py-2 font-medium text-indigo-700"><span class="inline-flex items-center gap-2"><span class="h-4 w-4 rounded bg-indigo-100"></span>Dashboard</span><span>›</span></a></li>
                                    <li><a href="#" class="flex items-center justify-between rounded-md px-2.5 py-2 text-slate-600 hover:bg-slate-50"><span class="inline-flex items-center gap-2"><span class="h-4 w-4 rounded border border-slate-300"></span>CRM</span><span class="h-2 w-2 rounded-full bg-amber-400"></span></a></li>
                                    <li><a href="#" class="flex items-center justify-between rounded-md px-2.5 py-2 text-slate-600 hover:bg-slate-50"><span class="inline-flex items-center gap-2"><span class="h-4 w-4 rounded border border-slate-300"></span>Sales</span><span class="h-2 w-2 rounded-full bg-amber-400"></span></a></li>
                                    <li><a href="#" class="flex items-center justify-between rounded-md px-2.5 py-2 text-slate-600 hover:bg-slate-50"><span class="inline-flex items-center gap-2"><span class="h-4 w-4 rounded border border-slate-300"></span>HR</span><span class="h-2 w-2 rounded-full bg-amber-400"></span></a></li>
                                    <li><a href="#" class="flex items-center justify-between rounded-md px-2.5 py-2 text-slate-600 hover:bg-slate-50"><span class="inline-flex items-center gap-2"><span class="h-4 w-4 rounded border border-slate-300"></span>Analytics</span><span class="h-2 w-2 rounded-full bg-amber-400"></span></a></li>
                                </ul>
                            </div>

                            <div>
                                <p class="mb-2 px-2 text-[10px] font-semibold uppercase tracking-[0.08em] text-slate-400">UI Elements</p>
                                <ul class="space-y-1">
                                    <li><a href="#" class="flex items-center justify-between rounded-md px-2.5 py-2 text-slate-600 hover:bg-slate-50"><span class="inline-flex items-center gap-2"><span class="h-4 w-4 rounded border border-slate-300"></span>UI Elements</span><span>⌄</span></a></li>
                                    <li><a href="#" class="flex items-center justify-between rounded-md px-2.5 py-2 text-slate-600 hover:bg-slate-50"><span class="inline-flex items-center gap-2"><span class="h-4 w-4 rounded border border-slate-300"></span>Advanced UI</span><span>⌄</span></a></li>
                                </ul>
                            </div>

                            <div>
                                <p class="mb-2 px-2 text-[10px] font-semibold uppercase tracking-[0.08em] text-slate-400">Forms & Data</p>
                                <ul class="space-y-1">
                                    <li><a href="#" class="flex items-center justify-between rounded-md px-2.5 py-2 text-slate-600 hover:bg-slate-50"><span class="inline-flex items-center gap-2"><span class="h-4 w-4 rounded border border-slate-300"></span>Form Elements</span><span>⌄</span></a></li>
                                    <li><a href="#" class="flex items-center justify-between rounded-md px-2.5 py-2 text-slate-600 hover:bg-slate-50"><span class="inline-flex items-center gap-2"><span class="h-4 w-4 rounded border border-slate-300"></span>Tables</span><span>⌄</span></a></li>
                                    <li><a href="#" class="flex items-center justify-between rounded-md px-2.5 py-2 text-slate-600 hover:bg-slate-50"><span class="inline-flex items-center gap-2"><span class="h-4 w-4 rounded border border-slate-300"></span>Notifications</span><span class="rounded-full border border-indigo-200 px-1.5 py-0.5 text-[10px] font-semibold text-indigo-600">PRO</span></a></li>
                                    <li><a href="#" class="flex items-center justify-between rounded-md px-2.5 py-2 text-slate-600 hover:bg-slate-50"><span class="inline-flex items-center gap-2"><span class="h-4 w-4 rounded border border-slate-300"></span>Maps</span><span>⌄</span></a></li>
                                </ul>
                            </div>

                            <div>
                                <p class="mb-2 px-2 text-[10px] font-semibold uppercase tracking-[0.08em] text-slate-400">Apps</p>
                                <ul class="space-y-1">
                                    <li><a href="#" class="flex items-center justify-between rounded-md px-2.5 py-2 text-slate-600 hover:bg-slate-50"><span class="inline-flex items-center gap-2"><span class="h-4 w-4 rounded border border-slate-300"></span>E-mail</span><span class="rounded-full border border-indigo-200 px-1.5 py-0.5 text-[10px] font-semibold text-indigo-600">PRO</span></a></li>
                                    <li><a href="#" class="flex items-center justify-between rounded-md px-2.5 py-2 text-slate-600 hover:bg-slate-50"><span class="inline-flex items-center gap-2"><span class="h-4 w-4 rounded border border-slate-300"></span>Calendar</span><span class="rounded-full border border-indigo-200 px-1.5 py-0.5 text-[10px] font-semibold text-indigo-600">PRO</span></a></li>
                                    <li><a href="#" class="flex items-center justify-between rounded-md px-2.5 py-2 text-slate-600 hover:bg-slate-50"><span class="inline-flex items-center gap-2"><span class="h-4 w-4 rounded border border-slate-300"></span>Todo List</span><span class="rounded-full border border-indigo-200 px-1.5 py-0.5 text-[10px] font-semibold text-indigo-600">PRO</span></a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </aside>

                <div>
                    <div class="mb-5 flex flex-wrap items-center gap-1 border-b border-gray-200 text-xs font-medium text-gray-500">
                        <button type="button" class="border-b-2 border-indigo-600 px-3 py-2 text-indigo-700">Overview</button>
                        <button type="button" class="px-3 py-2 hover:text-gray-700">Audiences</button>
                        <button type="button" class="px-3 py-2 hover:text-gray-700">Demographics</button>
                        <button type="button" class="px-3 py-2 hover:text-gray-700">More</button>
                    </div>

            <div class="grid grid-cols-1 gap-2.5 sm:grid-cols-2 xl:grid-cols-6">
                <div class="rounded-lg border border-[#eef1f6] bg-white px-4 py-3 shadow-[0_1px_2px_rgba(16,24,40,0.05)]">
                    <p class="text-xs text-gray-500">Bounce Rate</p>
                    <p class="mt-1 text-[1.9rem] leading-none font-semibold text-gray-900">32.53%</p>
                    <p class="mt-1 text-xs text-rose-500">▼ 0.5%</p>
                </div>
                <div class="rounded-lg border border-[#eef1f6] bg-white px-4 py-3 shadow-[0_1px_2px_rgba(16,24,40,0.05)]">
                    <p class="text-xs text-gray-500">Page Views</p>
                    <p class="mt-1 text-[1.9rem] leading-none font-semibold text-gray-900">7,682</p>
                    <p class="mt-1 text-xs text-emerald-500">▲ 0.1%</p>
                </div>
                <div class="rounded-lg border border-[#eef1f6] bg-white px-4 py-3 shadow-[0_1px_2px_rgba(16,24,40,0.05)]">
                    <p class="text-xs text-gray-500">New Sessions</p>
                    <p class="mt-1 text-[1.9rem] leading-none font-semibold text-gray-900">68.8</p>
                    <p class="mt-1 text-xs text-rose-500">▼ 68.8</p>
                </div>
                <div class="rounded-lg border border-[#eef1f6] bg-white px-4 py-3 shadow-[0_1px_2px_rgba(16,24,40,0.05)]">
                    <p class="text-xs text-gray-500">Avg. Time on Site</p>
                    <p class="mt-1 text-[1.9rem] leading-none font-semibold text-gray-900">2m:35s</p>
                    <p class="mt-1 text-xs text-emerald-500">▲ 0.8%</p>
                </div>
                <div class="rounded-lg border border-[#eef1f6] bg-white px-4 py-3 shadow-[0_1px_2px_rgba(16,24,40,0.05)]">
                    <p class="text-xs text-gray-500">Qualified Leads</p>
                    <p class="mt-1 text-[1.9rem] leading-none font-semibold text-gray-900">1,154</p>
                    <p class="mt-1 text-xs text-rose-500">▼ 1.2%</p>
                </div>
                <div class="rounded-lg border border-[#eef1f6] bg-white px-4 py-3 shadow-[0_1px_2px_rgba(16,24,40,0.05)]">
                    <p class="text-xs text-gray-500">Conversion Rate</p>
                    <p class="mt-1 text-[1.9rem] leading-none font-semibold text-gray-900">9.34%</p>
                    <p class="mt-1 text-xs text-emerald-500">▲ 0.4%</p>
                </div>
            </div>

            <div class="mt-6 grid grid-cols-1 gap-5 xl:grid-cols-3">
                <div class="xl:col-span-2 space-y-5">
                    <div class="rounded-lg border border-[#eef1f6] bg-white p-5 shadow-[0_1px_2px_rgba(16,24,40,0.05)]">
                        <div class="mb-4 flex flex-wrap items-center justify-between gap-3">
                            <div>
                                <h3 class="text-base font-semibold text-gray-900">Performance Line Chart</h3>
                                <p class="text-sm text-gray-500">Weekly engagement and active users trend</p>
                            </div>
                            <div class="flex items-center gap-4 text-xs text-gray-500">
                                <span class="inline-flex items-center gap-2"><span class="h-2.5 w-2.5 rounded-full bg-indigo-600"></span>This week</span>
                                <span class="inline-flex items-center gap-2"><span class="h-2.5 w-2.5 rounded-full bg-sky-400"></span>Last week</span>
                            </div>
                        </div>
                        <div class="h-64">
                            <canvas id="erpPerformanceChart" aria-label="Performance line chart" role="img"></canvas>
                        </div>
                    </div>

                    <div class="rounded-lg border border-[#eef1f6] bg-white p-5 shadow-[0_1px_2px_rgba(16,24,40,0.05)]">
                        <div class="mb-4 flex flex-wrap items-center justify-between gap-3">
                            <div>
                                <h3 class="text-base font-semibold text-gray-900">Market Overview</h3>
                                <p class="text-sm text-gray-500">Current month sales performance by week</p>
                            </div>
                            <button type="button" class="rounded-md border border-gray-200 bg-white px-3 py-1.5 text-xs font-medium text-gray-600">This month</button>
                        </div>
                        <div class="mb-4 flex items-end gap-2">
                            <p class="text-3xl font-semibold text-gray-900">$362,531.00</p>
                            <p class="pb-1 text-sm font-medium text-emerald-600">(+1.37%)</p>
                        </div>
                        <div class="h-56">
                            <canvas id="erpMarketOverviewChart" aria-label="Market overview bar chart" role="img"></canvas>
                        </div>
                    </div>

                    <div class="relative overflow-hidden rounded-lg bg-gradient-to-r from-slate-900 via-slate-800 to-slate-900 p-7 text-white shadow-[0_4px_12px_rgba(15,23,42,0.2)]">
                        <div class="max-w-md">
                            <p class="text-3xl font-semibold leading-tight">Enhance your <span class="text-sky-300">Campaign</span> for better outreach</p>
                            <button type="button" class="mt-5 rounded-md bg-sky-500 px-5 py-2.5 text-sm font-semibold text-white hover:bg-sky-400">Upgrade Account!</button>
                        </div>
                        <div class="pointer-events-none absolute -right-12 -top-10 h-48 w-48 rounded-full bg-amber-300/20"></div>
                        <div class="pointer-events-none absolute -bottom-16 right-10 h-40 w-40 rounded-full bg-sky-400/30"></div>
                        <div class="pointer-events-none absolute right-0 top-0 h-full w-40 bg-[radial-gradient(circle_at_top_right,rgba(56,189,248,0.30),transparent_55%)]"></div>
                    </div>

                    <div class="rounded-lg border border-[#eef1f6] bg-white p-5 shadow-[0_1px_2px_rgba(16,24,40,0.05)]">
                        <div class="mb-4 flex flex-wrap items-center justify-between gap-3">
                            <div>
                                <h3 class="text-base font-semibold text-gray-900">Pending Requests</h3>
                                <p class="text-sm text-gray-500">You have 50+ new requests</p>
                            </div>
                            <button type="button" class="rounded-md bg-indigo-600 px-3 py-2 text-xs font-medium text-white">Add new member</button>
                        </div>

                        <div class="overflow-x-auto">
                            <table class="min-w-full text-sm">
                                <thead>
                                    <tr class="border-b border-gray-100 text-xs uppercase tracking-wide text-gray-400">
                                        <th class="px-2 py-3 text-left">Customer</th>
                                        <th class="px-2 py-3 text-left">Company</th>
                                        <th class="px-2 py-3 text-left">Progress</th>
                                        <th class="px-2 py-3 text-left">Status</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-100">
                                    <tr>
                                        <td class="px-2 py-3">
                                            <div class="flex items-center gap-2">
                                                <span class="h-8 w-8 rounded-full bg-gradient-to-br from-amber-300 to-amber-500"></span>
                                                <div>
                                                    <p class="font-medium text-gray-900">Brandon Washington</p>
                                                    <p class="text-xs text-gray-500">Head admin</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-2 py-3 text-gray-700">Company name 1</td>
                                        <td class="px-2 py-3">
                                            <div class="flex items-center gap-2 text-xs text-gray-500"><span>79%</span><span>85/162</span></div>
                                            <div class="mt-1 h-1.5 rounded-full bg-gray-100"><div class="h-full w-[79%] rounded-full bg-emerald-500"></div></div>
                                        </td>
                                        <td class="px-2 py-3"><span class="rounded-full bg-amber-100 px-2 py-1 text-xs font-medium text-amber-700">In progress</span></td>
                                    </tr>
                                    <tr>
                                        <td class="px-2 py-3">
                                            <div class="flex items-center gap-2">
                                                <span class="h-8 w-8 rounded-full bg-gradient-to-br from-fuchsia-300 to-fuchsia-500"></span>
                                                <div>
                                                    <p class="font-medium text-gray-900">Laura Brooks</p>
                                                    <p class="text-xs text-gray-500">Head admin</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-2 py-3 text-gray-700">Company name 1</td>
                                        <td class="px-2 py-3">
                                            <div class="flex items-center gap-2 text-xs text-gray-500"><span>65%</span><span>85/162</span></div>
                                            <div class="mt-1 h-1.5 rounded-full bg-gray-100"><div class="h-full w-[65%] rounded-full bg-sky-500"></div></div>
                                        </td>
                                        <td class="px-2 py-3"><span class="rounded-full bg-emerald-100 px-2 py-1 text-xs font-medium text-emerald-700">Done</span></td>
                                    </tr>
                                    <tr>
                                        <td class="px-2 py-3">
                                            <div class="flex items-center gap-2">
                                                <span class="h-8 w-8 rounded-full bg-gradient-to-br from-orange-300 to-orange-500"></span>
                                                <div>
                                                    <p class="font-medium text-gray-900">Wayne Murphy</p>
                                                    <p class="text-xs text-gray-500">Head admin</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-2 py-3 text-gray-700">Company name 1</td>
                                        <td class="px-2 py-3">
                                            <div class="flex items-center gap-2 text-xs text-gray-500"><span>55%</span><span>85/162</span></div>
                                            <div class="mt-1 h-1.5 rounded-full bg-gray-100"><div class="h-full w-[55%] rounded-full bg-amber-500"></div></div>
                                        </td>
                                        <td class="px-2 py-3"><span class="rounded-full bg-rose-100 px-2 py-1 text-xs font-medium text-rose-700">Pending</span></td>
                                    </tr>
                                    <tr>
                                        <td class="px-2 py-3">
                                            <div class="flex items-center gap-2">
                                                <span class="h-8 w-8 rounded-full bg-gradient-to-br from-violet-300 to-violet-500"></span>
                                                <div>
                                                    <p class="font-medium text-gray-900">Matthew Bailey</p>
                                                    <p class="text-xs text-gray-500">Head admin</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-2 py-3 text-gray-700">Company name 1</td>
                                        <td class="px-2 py-3">
                                            <div class="flex items-center gap-2 text-xs text-gray-500"><span>65%</span><span>85/162</span></div>
                                            <div class="mt-1 h-1.5 rounded-full bg-gray-100"><div class="h-full w-[65%] rounded-full bg-indigo-500"></div></div>
                                        </td>
                                        <td class="px-2 py-3"><span class="rounded-full bg-indigo-100 px-2 py-1 text-xs font-medium text-indigo-700">Completed</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="space-y-5">
                    <div class="rounded-lg bg-indigo-700 p-5 text-white shadow-[0_4px_12px_rgba(67,56,202,0.22)]">
                        <p class="text-sm font-medium text-indigo-100">Status Summary</p>
                        <p class="mt-3 text-xs uppercase tracking-wide text-indigo-200">Closed Value</p>
                        <p class="mt-1 text-4xl font-semibold">357</p>
                        <div class="mt-4 h-16">
                            <canvas id="erpStatusSparkChart" aria-label="Status summary sparkline" role="img"></canvas>
                        </div>
                    </div>

                    <div class="grid grid-cols-2 gap-3">
                        <div class="rounded-lg border border-[#eef1f6] bg-white p-4 shadow-[0_1px_2px_rgba(16,24,40,0.05)]">
                            <div class="flex items-center gap-3">
                                <div class="h-10 w-10">
                                    <canvas id="erpTotalVisitorsMiniChart" aria-label="Total visitors mini chart" role="img"></canvas>
                                </div>
                                <div>
                                    <p class="text-xs text-gray-500">Total Visitors</p>
                                    <p class="mt-1 text-2xl font-semibold text-gray-900">26.80%</p>
                                </div>
                            </div>
                        </div>
                        <div class="rounded-lg border border-[#eef1f6] bg-white p-4 shadow-[0_1px_2px_rgba(16,24,40,0.05)]">
                            <div class="flex items-center gap-3">
                                <div class="h-10 w-10">
                                    <canvas id="erpVisitsPerDayMiniChart" aria-label="Visits per day mini chart" role="img"></canvas>
                                </div>
                                <div>
                                    <p class="text-xs text-gray-500">Visits per day</p>
                                    <p class="mt-1 text-2xl font-semibold text-gray-900">9065</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="rounded-lg border border-[#eef1f6] bg-white p-5 shadow-[0_1px_2px_rgba(16,24,40,0.05)]">
                        <div class="mb-4 flex items-center justify-between">
                            <h3 class="text-base font-semibold text-gray-900">Todo List</h3>
                            <button type="button" class="rounded-full bg-indigo-600 px-2.5 py-1 text-xs font-medium text-white">+</button>
                        </div>
                        <ul class="space-y-4 text-sm text-gray-700">
                            <li class="flex items-start gap-3 border-b border-gray-100 pb-3">
                                <span class="mt-1 h-3.5 w-3.5 rounded-full border border-gray-300"></span>
                                <div>
                                    <p>Lorem Ipsum is simply dummy text of the printing</p>
                                    <p class="mt-1 text-xs text-gray-500">24 June 2020 · <span class="rounded bg-amber-100 px-2 py-0.5 text-amber-700">Due tomorrow</span></p>
                                </div>
                            </li>
                            <li class="flex items-start gap-3 border-b border-gray-100 pb-3">
                                <span class="mt-1 h-3.5 w-3.5 rounded-full border border-gray-300"></span>
                                <div>
                                    <p>Lorem Ipsum is simply dummy text of the printing</p>
                                    <p class="mt-1 text-xs text-gray-500">23 June 2020 · <span class="rounded bg-emerald-100 px-2 py-0.5 text-emerald-700">Done</span></p>
                                </div>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="mt-1 h-3.5 w-3.5 rounded-full border border-gray-300"></span>
                                <div>
                                    <p>Lorem Ipsum is simply dummy text of the printing</p>
                                    <p class="mt-1 text-xs text-gray-500">24 June 2020 · <span class="rounded bg-rose-100 px-2 py-0.5 text-rose-700">Expired</span></p>
                                </div>
                            </li>
                        </ul>
                        <button type="button" class="mt-5 w-full rounded-full bg-amber-300 px-3 py-2 text-sm font-semibold text-slate-900">Upgrade to Pro</button>
                    </div>

                    <div class="rounded-lg border border-[#eef1f6] bg-white p-5 shadow-[0_1px_2px_rgba(16,24,40,0.05)]">
                        <h3 class="text-base font-semibold text-gray-900">Type By Amount</h3>
                        <div class="mt-4 h-56">
                            <canvas id="erpTypeAmountChart" aria-label="Type by amount donut chart" role="img"></canvas>
                        </div>
                        <div class="mt-4 grid grid-cols-2 gap-2 text-xs text-gray-500">
                            <span class="inline-flex items-center gap-1.5"><span class="h-2 w-2 rounded-full bg-indigo-700"></span>Total</span>
                            <span class="inline-flex items-center gap-1.5"><span class="h-2 w-2 rounded-full bg-sky-400"></span>Net</span>
                            <span class="inline-flex items-center gap-1.5"><span class="h-2 w-2 rounded-full bg-rose-300"></span>Gross</span>
                            <span class="inline-flex items-center gap-1.5"><span class="h-2 w-2 rounded-full bg-teal-300"></span>AVG</span>
                        </div>
                    </div>

                    <div class="rounded-lg border border-[#eef1f6] bg-white p-5 shadow-[0_1px_2px_rgba(16,24,40,0.05)]">
                        <div class="mb-3 flex items-center justify-between">
                            <h3 class="text-base font-semibold text-gray-900">Leave Report</h3>
                            <button type="button" class="rounded-md border border-gray-200 bg-white px-3 py-1.5 text-xs text-gray-600">Month Wise</button>
                        </div>
                        <div class="h-36">
                            <canvas id="erpLeaveReportChart" aria-label="Leave report chart" role="img"></canvas>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            if (!window.Chart) {
                return;
            }

            const chartDefaults = {
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false,
                    },
                },
            };

            const performanceChart = document.getElementById('erpPerformanceChart');
            if (performanceChart) {
                new Chart(performanceChart, {
                    type: 'line',
                    data: {
                        labels: ['SUN', 'MON', 'TUE', 'WED', 'THU', 'FRI', 'SAT'],
                        datasets: [
                            {
                                label: 'This week',
                                data: [95, 170, 220, 185, 160, 240, 205],
                                borderColor: '#3730a3',
                                backgroundColor: 'rgba(55, 48, 163, 0.12)',
                                pointBackgroundColor: '#3730a3',
                                borderWidth: 2,
                                tension: 0.35,
                                fill: true,
                                pointRadius: 2,
                            },
                            {
                                label: 'Last week',
                                data: [80, 190, 160, 180, 145, 155, 210],
                                borderColor: '#38bdf8',
                                backgroundColor: 'rgba(56, 189, 248, 0.12)',
                                pointBackgroundColor: '#38bdf8',
                                borderWidth: 2,
                                tension: 0.35,
                                fill: true,
                                pointRadius: 2,
                            },
                        ],
                    },
                    options: {
                        ...chartDefaults,
                        plugins: {
                            legend: {
                                display: false,
                            },
                        },
                        scales: {
                            x: {
                                grid: {
                                    color: '#f1f5f9',
                                },
                                ticks: {
                                    color: '#64748b',
                                },
                            },
                            y: {
                                min: 0,
                                max: 300,
                                grid: {
                                    color: '#f1f5f9',
                                },
                                ticks: {
                                    stepSize: 50,
                                    color: '#94a3b8',
                                },
                            },
                        },
                    },
                });
            }

            const marketChart = document.getElementById('erpMarketOverviewChart');
            if (marketChart) {
                new Chart(marketChart, {
                    type: 'bar',
                    data: {
                        labels: ['W1', 'W2', 'W3', 'W4', 'W5', 'W6', 'W7', 'W8', 'W9', 'W10'],
                        datasets: [
                            {
                                label: 'Last week',
                                data: [120, 210, 200, 180, 220, 115, 195, 120, 205, 150],
                                backgroundColor: '#60a5fa',
                                borderRadius: 6,
                                barThickness: 10,
                            },
                            {
                                label: 'This week',
                                data: [95, 85, 0, 60, 65, 92, 80, 90, 0, 145],
                                backgroundColor: '#1d4ed8',
                                borderRadius: 6,
                                barThickness: 10,
                            },
                        ],
                    },
                    options: {
                        ...chartDefaults,
                        plugins: {
                            legend: {
                                display: true,
                                position: 'top',
                                align: 'end',
                                labels: {
                                    usePointStyle: true,
                                    boxWidth: 8,
                                    boxHeight: 8,
                                },
                            },
                        },
                        scales: {
                            x: {
                                stacked: true,
                                grid: {
                                    display: false,
                                },
                            },
                            y: {
                                stacked: true,
                                beginAtZero: true,
                                max: 320,
                                grid: {
                                    color: '#f1f5f9',
                                },
                            },
                        },
                    },
                });
            }

            const statusSparkChart = document.getElementById('erpStatusSparkChart');
            if (statusSparkChart) {
                new Chart(statusSparkChart, {
                    type: 'line',
                    data: {
                        labels: ['1', '2', '3', '4', '5', '6', '7'],
                        datasets: [
                            {
                                data: [42, 48, 51, 50, 36, 33, 55],
                                borderColor: '#22d3ee',
                                tension: 0.45,
                                fill: false,
                                pointRadius: 0,
                                borderWidth: 2.5,
                            },
                        ],
                    },
                    options: {
                        ...chartDefaults,
                        scales: {
                            x: {
                                display: false,
                            },
                            y: {
                                display: false,
                            },
                        },
                    },
                });
            }

            const totalVisitorsMiniChart = document.getElementById('erpTotalVisitorsMiniChart');
            if (totalVisitorsMiniChart) {
                new Chart(totalVisitorsMiniChart, {
                    type: 'doughnut',
                    data: {
                        labels: ['Completed', 'Remaining'],
                        datasets: [
                            {
                                data: [68, 32],
                                backgroundColor: ['#4f46e5', '#e2e8f0'],
                                borderWidth: 0,
                            },
                        ],
                    },
                    options: {
                        ...chartDefaults,
                        cutout: '76%',
                    },
                });
            }

            const visitsPerDayMiniChart = document.getElementById('erpVisitsPerDayMiniChart');
            if (visitsPerDayMiniChart) {
                new Chart(visitsPerDayMiniChart, {
                    type: 'doughnut',
                    data: {
                        labels: ['Completed', 'Remaining'],
                        datasets: [
                            {
                                data: [54, 46],
                                backgroundColor: ['#14b8a6', '#e2e8f0'],
                                borderWidth: 0,
                            },
                        ],
                    },
                    options: {
                        ...chartDefaults,
                        cutout: '76%',
                    },
                });
            }

            const typeAmountChart = document.getElementById('erpTypeAmountChart');
            if (typeAmountChart) {
                new Chart(typeAmountChart, {
                    type: 'doughnut',
                    data: {
                        labels: ['Total', 'Net', 'Gross', 'AVG'],
                        datasets: [
                            {
                                data: [40, 30, 20, 10],
                                backgroundColor: ['#1e40af', '#38bdf8', '#fca5a5', '#5eead4'],
                                borderWidth: 0,
                            },
                        ],
                    },
                    options: {
                        ...chartDefaults,
                        cutout: '58%',
                    },
                });
            }

            const leaveReportChart = document.getElementById('erpLeaveReportChart');
            if (leaveReportChart) {
                new Chart(leaveReportChart, {
                    type: 'bar',
                    data: {
                        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May'],
                        datasets: [
                            {
                                data: [18, 26, 39, 21, 29],
                                backgroundColor: '#38bdf8',
                                borderRadius: 8,
                                barThickness: 18,
                            },
                        ],
                    },
                    options: {
                        ...chartDefaults,
                        scales: {
                            x: {
                                grid: {
                                    display: false,
                                },
                            },
                            y: {
                                beginAtZero: true,
                                grid: {
                                    color: '#f1f5f9',
                                },
                            },
                        },
                    },
                });
            }
        });
    </script>
</x-app-layout>
