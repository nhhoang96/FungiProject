{include "head.tpl" title="Glossary" active="glossary"}
<body>

<div class="container">
    <div class="page-header">
        <h1 class="glossarytitle">Glossary</h1>
    </div>

    <p>As with any specialized area of study,
        mycology employs specialized words to convey
        specific meanings. While highly technical language
        is minimized in the keys, the user should understand
        the specialized terms that are used. Taking the time
        to do this will greatly facilitate the use of the keys
        and understanding of the species descriptions.
        The specialized terms found in the keys are defined here and,
        in cases where a picture is worth a thousand words,
        the term is illustrated as well.
    </p><hr>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>Term</th>
                <th>Definition</th>
            <tr>
        </thead>
        <tbody>
        {foreach $terms as $term}
        <tr>
            <td>{$term['Term']}</td>
            <td>{$term['Def']}
            {foreach $term['Images'] as $image}
                    <img src="{$image['Image_Name']}" >
                    {$image['Caption']}{/foreach}</td>
        </tr>
        {/foreach}
        </tbody>
    </table>

    {include "footer.tpl"}
</div>
</body>
