<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom">
    <id>{{ url('/feed') }}</id>
    <link href="{{ url('/feed') }}"></link>
    <title><![CDATA[{{ config('app.name') }}]]></title>
    <description></description>
    <language></language>
    <updated>{{ $blogs->first()->updated_at->format('D, d M Y H:i:s +0000') }}</updated>
    @foreach ($blogs as $blog)
    <entry>
        <title><![CDATA[{{ $blog->title }}]]></title>
        <link rel="alternate" href="{{ url('/blog/') }}{{ $blog->slug }}" />
        <id>{{ $blog->slug }}</id>
        <author>
            <name> <![CDATA[{{ $created_by = 'App\Models\User'::find($blog->created_by)->name }}]]></name>
        </author>
        <summary type="html">
            <![CDATA[{{$blog->description}}]]>
        </summary>
        <category type="html">
            <![CDATA[]]>
        </category>
        <updated>{{ $blog->updated_at->format('D, d M Y H:i:s +0000') }}</updated>
    </entry>
    @endforeach
</feed>