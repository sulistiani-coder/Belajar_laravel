@extends(''layouts.master'')
@section(''title'', ''Search Results'')
@section(''content'')
    <h2>Search Results</h2>
    
    @if($query)
        <p>Searching for: <strong>"{{ $query }}"</strong></p>
        <p>Found <strong>{{ $total }}</strong> results</p>
        
        @if($total > 0)
            <!-- Posts Results -->
            @if($posts->count() > 0)
                <h3>Posts ({{ $posts->count() }})</h3>
                <div style="margin-bottom: 30px;">
                    @foreach($posts as $post)
                        <div style="border: 1px solid #ddd; padding: 15px; margin: 10px 0; border-radius: 5px;">
                            <h4><a href="#" style="text-decoration: none; color: #007bff;">{{ $post->title }}</a></h4>
                            <p>{{ strlen($post->content) > 150 ? substr($post->content, 0, 150) . "..." : $post->content }}</p>
                            <small style="color: #666;">Created: {{ $post->created_at->format(''d M Y'') }}</small>
                        </div>
                    @endforeach
                </div>
            @endif
            
            <!-- Products Results -->
            @if($products->count() > 0)
                <h3>Products ({{ $products->count() }})</h3>
                <div style="margin-bottom: 30px;">
                    @foreach($products as $product)
                        <div style="border: 1px solid #ddd; padding: 15px; margin: 10px 0; border-radius: 5px;">
                            <h4><a href="#" style="text-decoration: none; color: #007bff;">{{ $product->name }}</a></h4>
                            <p>{{ strlen($product->description) > 150 ? substr($product->description, 0, 150) . "..." : $product->description }}</p>
                            <p><strong>Price: Rp {{ number_format($product->price, 0, '''', ''.'') }}</strong></p>
                            <small style="color: #666;">Created: {{ $product->created_at->format(''d M Y'') }}</small>
                        </div>
                    @endforeach
                </div>
            @endif
        @else
            <div style="text-align: center; padding: 50px; background: #f8f9fa; border-radius: 5px;">
                <h3>No results found</h3>
                <p>Try different keywords or check your spelling.</p>
                <a href="{{ route(''search.index'') }}" style="display: inline-block; padding: 10px 20px; background: #007bff; color: white; text-decoration: none; border-radius: 5px;">Search Again</a>
            </div>
        @endif
    @else
        <div style="text-align: center; padding: 50px;">
            <h3>Please enter a search term</h3>
            <a href="{{ route(''search.index'') }}" style="display: inline-block; padding: 10px 20px; background: #007bff; color: white; text-decoration: none; border-radius: 5px;">Go to Search</a>
        </div>
    @endif
@endsection

