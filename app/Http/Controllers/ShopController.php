<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreShopRequest;
use App\Http\Requests\UpdateShopRequest;
use App\Models\Shop;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     * @throws AuthorizationException
     */
    public function index(): View
    {
        $this->authorize('viewAny', [Shop::class, auth()->user()]);

        $shops = Shop::all();
        return view('shops.index', compact('shops'));
    }

    /**
     * Show the form for creating a new resource.
     * @throws AuthorizationException
     */
    public function create(): View
    {
        $this->authorize('create', [Shop::class, auth()->user()]);

        return view('shops.create');
    }

    /**
     * Store a newly created resource in storage.
     * @throws AuthorizationException
     */
    public function store(StoreShopRequest $request): RedirectResponse
    {
        $this->authorize('create', [Shop::class, auth()->user()]);

        $validatedData = $request->validated();

        $shop = Shop::create($validatedData);

        return redirect()->route('shops.show', $shop->uuid);
    }

    /**
     * Display the specified resource.
     * @throws AuthorizationException
     */
    public function show(Shop $shop): View
    {
        $this->authorize('view', [Shop::class, $shop, auth()->user()]);

        return view('shops.show', compact('shop'));
    }

    /**
     * Show the form for editing the specified resource.
     * @throws AuthorizationException
     */
    public function edit(Shop $shop): View
    {
        $this->authorize('update', [Shop::class, $shop, auth()->user()]);

        return view('shops.edit', compact('shop'));
    }

    /**
     * Update the specified resource in storage.
     * @throws AuthorizationException
     */
    public function update(UpdateShopRequest $request, Shop $shop): RedirectResponse
    {
        $this->authorize('update', [Shop::class, $shop, auth()->user()]);

        $validatedData = $request->validated();

        $shop->update($validatedData);

        return redirect()->route('shops.show', $shop->uuid);

    }

    /**
     * Remove the specified resource from storage.
     * @throws AuthorizationException
     */
    public function destroy(Shop $shop): RedirectResponse
    {
        $this->authorize('delete', [Shop::class, $shop, auth()->user()]);

        $shop->delete();

        return redirect()->route('shops.index');
    }
}
