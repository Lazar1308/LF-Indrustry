const tabs = jQuery('[data-tab-target]')
const tabContents = jQuery('[data-tab-content]');


const tabClickHandler = e => {
        e.preventDefault();
        const target = jQuery(e.currentTarget);
        const itemIndex = target.attr("data-tab-target");
        const itemArray = JSON.parse(itemIndex);
        tabContents.hide();
        itemArray.forEach(item => {
           const currentTabContent = jQuery(`[data-index=${item}]`);
           currentTabContent.show();
        })
        target.addClass('active');
        target.siblings().removeClass("active");
}


tabs.on("click", tabClickHandler);


