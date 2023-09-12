window.addEventListener("DOMContentLoaded", () => {
    const allTabsTitlesList = document.querySelectorAll(
        ".eb-advanced-tabs-wrapper > .eb-tabs-nav > ul.tabTitles"
    );

    if (allTabsTitlesList.length === 0) return false;

    var hashTag = window.location.hash.substring(1);

    for (const titleListsWrap of allTabsTitlesList) {
        //
        // const tabsWrapId = titleListsWrap.dataset.tabsUlId;
        const tabTitlesLiTags = titleListsWrap.children;
        var hashMatched = false;
        for (const titleLiTag of tabTitlesLiTags) {
            //

            if (hashTag !== "") {
                const customId = titleLiTag.getAttribute(
                    "data-title-custom-id"
                );
                if (customId === hashTag) {
                    titleLiTag.classList.add("active");
                    titleLiTag.classList.remove("inactive");
                    hashMatched = true;
                    const tabContentWrappers = titleListsWrap.closest(
                        ".eb-advanced-tabs-wrapper"
                    ).children[1].children;
                    for (const tabContentWrap of tabContentWrappers) {
                        if (
                            tabContentWrap.dataset.tabId ===
                            titleLiTag.dataset.titleTabId
                        ) {
                            // tabContentWrap.style.display = "block";
                            // tabContentWrap.style.animation = "fadeIn 0.3s";

                            tabContentWrap.style.opacity = 1;
                            tabContentWrap.style.transition =
                                "opacity .3s cubic-bezier(.45,.05,.55,.95),visibility 0s";
                            tabContentWrap.style.transitionDelay = "0s,.3s";
                        } else {
                            // tabContentWrap.style.display = "none";

                            tabContentWrap.style.opacity = 0;
                            tabContentWrap.style.pointerEvents = "none";
                            tabContentWrap.style.transition =
                                "opacity .3s cubic-bezier(.45,.05,.55,.95),visibility 0s";
                            tabContentWrap.style.transitionDelay = "0s,.3s";
                        }
                    }
                } else {
                    titleLiTag.classList.add("inactive");
                    titleLiTag.classList.remove("active");
                }
            }

            titleLiTag.addEventListener("click", (e) => {
                //
                const thisLiTag = e.currentTarget;
                for (const singleLiTag of tabTitlesLiTags) {
                    if (singleLiTag !== thisLiTag) {
                        singleLiTag.classList.add("inactive");
                        singleLiTag.classList.remove("active");
                    } else {
                        singleLiTag.classList.add("active");
                        singleLiTag.classList.remove("inactive");
                    }
                }

                const tabContentWrappers = titleListsWrap.closest(
                    ".eb-advanced-tabs-wrapper"
                ).children[1].children;

                for (const tabContentWrap of tabContentWrappers) {
                    //
                    if (
                        tabContentWrap.dataset.tabId ===
                        thisLiTag.dataset.titleTabId
                    ) {
                        // tabContentWrap.style.display = "block";
                        // tabContentWrap.style.animation = "fadeIn 0.3s";

                        tabContentWrap.style.opacity = 1;
                        tabContentWrap.style.transition =
                            "opacity .3s cubic-bezier(.45,.05,.55,.95),visibility 0s";
                        tabContentWrap.style.transitionDelay = "0s,.3s";

                        const imageGalleres = tabContentWrap.querySelectorAll(
                            ".eb-img-gallery-filter-wrapper"
                        );

                        imageGalleres.forEach((imageGallery) => {
                            imageGallery
                                .querySelector(".eb-img-gallery-filter-item")
                                .click();
                        });
                    } else {
                        // tabContentWrap.style.display = "none";
                        tabContentWrap.style.opacity = 0;
                        tabContentWrap.style.pointerEvents = "none";
                        tabContentWrap.style.transition =
                            "opacity .3s cubic-bezier(.45,.05,.55,.95),visibility 0s";
                        tabContentWrap.style.transitionDelay = "0s,.3s";
                    }
                }
            });
        }
        if (hashMatched == false && tabTitlesLiTags.length > 0) {
            tabTitlesLiTags[0].classList.add("active");
            tabTitlesLiTags[0].classList.remove("inactive");
        }
    }

    // const allAdvTabsWraps = document.querySelectorAll(
    //     ".eb-advanced-tabs-wrapper .eb-tab-wrapper"
    // );

    // for (const tabWrapItem of allAdvTabsWraps) {
    //     tabWrapItem.classList.add("force-display-none-from-js");
    // }
});
