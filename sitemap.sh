#!/usr/bin/bash

declare -A prio=(
	[erste-hilfe]=1.0
	[anreise-parken]=0.0
	[auswilderung]=0.1
	[biologie]=0.1
	[datenschutz]=0.1
	[ernaehrung]=0.1
	[fliegeneier-maden]=0.8
	[gefahren]=0.4
	[igel]=0.1
	[igel-aufrollen]=0.7
	[impressum]=0.1
	[index]=1.0
	[pflegestellen]=0.5
	[spenden]=0.5
	[start]=1.0
	[wir]=0.1
)

{
cat <<"EOF"
<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
EOF

ls -1 *.php |
while read file
do
	cat <<EOF
		<url>
			<loc>https://igelhilfe-ludwigshafen.de/?page=${file%.*}</loc>
			<lastmod>$(git log -1 --no-show-signature  --pretty=format:%cd --date=iso8601-strict "$file")</lastmod>
			<priority>${prio[${file%.*}]}</priority>
		</url>
EOF
done

cat <<"EOF"
EOF
} | tidy -xml -indent 2>/dev/null > sitemap.xml
