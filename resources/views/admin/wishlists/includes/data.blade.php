<tr>
    <td class="text-lg-center"><a href="{{ route("dashboard.wishlists.index", ["user_id" => $wishlist->user->id]) }}">{{ $wishlist->user->name }}</a></td>
    <td class="text-lg-center"><a href="{{ route("dashboard.wishlists.index", ["product_id" => $wishlist->user->id]) }}">{{ $wishlist->product->nameLang() }}</a></td>

</tr>


