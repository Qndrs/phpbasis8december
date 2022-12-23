<?php
// https://jsonformatter.org/781946
$data = '{
    "props": {
      "pageProps": {
        "pageText": {
          "hospitalText": {
            "barscale_screenreader_text": "{{value}} ziekenhuisopnames per dag. Signaalwaarde: {{signaalwaarde}} opnames per dag.",
            "barscale_titel": "Gemiddeld aantal ziekenhuisopnames per dag",
            "bronnen": {
              "lnaz": {
                "download": "https://lcps.nu/wp-content/uploads/covid-19.csv",
                "href": "https://lcps.nu/datafeed/",
                "text": "LCPS"
              },
              "nice": {
                "download": "https://data.rivm.nl/covid-19/COVID-19_ziekenhuisopnames.csv",
                "href": "https://data.rivm.nl/meta/srv/dut/catalog.search#/metadata/4f4ad069-8f24-4fe8-b2a7-533ef27a899f",
                "text": "NICE via RIVM"
              }
            },
            "chart_bedbezetting": {
              "description": "Deze grafiek laat het aantal ziekenhuisbedden zien (IC-bedden niet meegerekend) dat door de tijd heen is bezet door patiënten met corona. Het gaat om de dag van opname en alle dagen waarop coronapatiënten in het ziekenhuis lagen. De bezettingscijfers worden geleverd door LCPS (Landelijk Coördinatiecentrum Patiënten Spreiding) en bijgewerkt op werkdagen.",
              "legend_dot_label": "Aantal bezette ziekenhuisbedden",
              "legend_inaccurate_label": "Cijfers zijn minder nauwkeurig",
              "legend_trend_label": "",
              "title": "Bezetting ziekenhuisbedden door de tijd heen"
            },
            "datums": "Laatste waardes verkregen op {{dateOfInsertion}}. Wordt op dinsdag en vrijdag bijgewerkt.",
            "extra_uitleg": "Dit is het gemiddelde aantal mensen dat per dag met COVID-19 is opgenomen in het ziekenhuis, inclusief de IC. Dit is een gemiddelde van de periode tussen {{dateStart}} en {{dateEnd}}. Het getal is afgerond. De meest recente dagen tellen niet mee in het gemiddelde, omdat de cijfers over deze dagen nog niet compleet zijn.",
            "kpi_bedbezetting": {
              "description": "Dit getal laat zien hoeveel ziekenhuisbedden (exclusief IC-bedden) bezet worden door patiënten met COVID-19.",
              "title": "Ziekenhuisbedden bezet door patiënten met COVID-19"
            },
            "kpi_titel": "Gemiddeld aantal ziekenhuisopnames per dag",
            "linechart_description": "In deze grafiek staan de ziekenhuisopnames (inclusief directe IC-opnames) op de dag dat mensen zijn opgenomen met COVID-19. Let op: omdat het aanmelden van ziekenhuisopnames vaak een paar dagen later gebeurt, zijn de laatste dagen nooit compleet. Zo kan het lijken alsof het aantal ziekenhuisopnames afneemt, terwijl dit niet zo is. De lijn van het gemiddelde over de laatste zeven dagen ontbreekt daarom in het laatste deel van de grafiek.",
            "linechart_legend_titel": "Ziekenhuisopnames",
            "linechart_legend_titel_moving_average": "Gemiddeld aantal van 7 dagen",
            "linechart_legend_titel_trend_label": "Ziekenhuisopnames",
            "linechart_legend_underreported_titel": "De laatste dagen zijn niet compleet, omdat meldingen vertraagd binnenkomen",
            "linechart_titel": "Ziekenhuisopnames door de tijd heen",
            "map_titel": "Woonplaats opgenomen patiënten",
            "map_toelichting": "Deze kaart laat de gemeenten en veiligheidsregio’s zien waar patiënten met corona zijn opgenomen in het ziekenhuis. Patiënten kunnen ook buiten hun regio opgenomen worden. De aantallen zijn relatief (per 100.000 inwoners) vanwege het verschillende aantal inwoners per gemeente en veiligheidsregio. Absolute aantallen kunt u zien door met de muis naar een bepaalde veiligheidsregio of gemeente te gaan. Let op: ziekenhuisopnames worden vaak met vertraging van een paar dagen gemeld.",
            "metadata": {
              "description": "Landelijk overzicht van het aantal mensen met COVID-19 dat een ziekenhuis is opgenomen.",
              "title": "Ziekenhuisopnames | Coronadashboard | Rijksoverheid.nl"
            },
            "pagina_toelichting": "Groei van het aantal opgenomen patiënten met COVID-19 kan ervoor zorgen dat ziekenhuizen het te druk krijgen. Daarnaast geeft dit cijfer een goed beeld van hoe de epidemie zich ontwikkelt. We houden hier bij hoeveel patiënten met COVID-19 worden opgenomen in ziekenhuizen en hoeveel bedden op gewone ziekenhuisafdelingen bezet zijn door patiënten met COVID-19.",
            "reference": {
              "href": "/verantwoording#ziekenhuizen"
            },
            "titel": "Ziekenhuisopnames",
            "titel_kpi": "Gemiddeld aantal ziekenhuisopnames per dag",
            "vaccination_status_chart": {
              "description": "Van **{{amountOfPeople}}** patiënten die tussen {{date_start}}  en {{date_end}} met COVID-19 zijn opgenomen in het ziekenhuis (incl. IC) is bekend of ze gevaccineerd waren. De grafiek laat zien hoeveel van deze patiënten gevaccineerd waren en hoeveel niet. \n\n[Lees de uitleg waarom niet van elke patiënt bekend is of die gevaccineerd is.](/verantwoording#gevaccineerde-en-ongevaccineerde-COVID-19-patiënten)\n\nDeze cijfers zeggen alleen iets over bescherming door vaccinatie in combinatie met cijfers over hoeveel mensen gevaccineerd zijn. [Gecombineerde cijfers](https://www.rivm.nl/nieuws/ongevaccineerde-COVID-19-pati%C3%ABnten-in-het-ziekenhuis-bijna-20jaar-jonger-dan-gevaccineerde) laten zien dat de kans om als volledig gevaccineerde met COVID-19 in het ziekenhuis te komen 17 keer kleiner dan als niet-gevaccineerde.",
              "labels": {
                "fully_vaccinated": "**{{fully_vaccinated_percentage, formatPercentage}}%** basisserie coronaprikken gehad (**{{fully_vaccinated, formatNumber}})**",
                "has_one_shot_or_not_vaccinated": "**{{has_one_shot_or_not_vaccinated_percentage, formatPercentage}}%** niet of gedeeltelijk gevaccineerd (**{{has_one_shot_or_not_vaccinated, formatNumber}}**)"
              },
              "source": {
                "href": "",
                "text": "RIVM"
              },
              "title": "Gevaccineerde en ongevaccineerde COVID-19-patiënten",
              "tooltip_labels": {
                "fully_vaccinated": "Basisserie coronaprikken\n**{{fully_vaccinated_percentage, formatPercentage}}% ({{fully_vaccinated, formatNumber}})**",
                "has_one_shot_or_not_vaccinated": "Niet of gedeeltelijk gevaccineerd  \n**{{has_one_shot_or_not_vaccinated_percentage, formatPercentage}}% ({{has_one_shot_or_not_vaccinated, formatNumber}})**"
              }
            }
          },
          "intensiveCareText": {
            "barscale_screenreader_text": "{{value}} intensive care-opnames gemeld op één dag. Signaalwaarde: {{signaalwaarde}} opnames per dag.",
            "barscale_titel": "Gemiddeld aantal intensive care-opnames per dag",
            "bronnen": {
              "lnaz": {
                "download": "https://lcps.nu/wp-content/uploads/covid-19.csv",
                "href": "https://lcps.nu/datafeed/",
                "text": "LCPS"
              },
              "nice": {
                "download": "https://data.rivm.nl/covid-19/COVID-19_ic_opnames.csv",
                "href": "https://data.rivm.nl/meta/srv/dut/catalog.search#/metadata/45f911c4-3a62-42f1-b594-524a75db2c94",
                "text": "NICE via RIVM"
              }
            },
            "chart_bedbezetting": {
              "description": "Deze grafiek laat het aantal IC-bedden zien dat door de tijd heen is bezet door patiënten met COVID-19. Het gaat om de dag van opname en alle dagen waarop coronapatiënten in het ziekenhuis lagen. De bezettingscijfers worden geleverd door LCPS (Landelijk Coördinatiecentrum Patiënten Spreiding) en bijgewerkt op werkdagen. Daarom zijn in de grafiek open gedeelten zichtbaar. Deze tonen de dagen waarop het LCPS geen data levert.",
              "legend_dot_label": "Bezetting IC-bedden",
              "legend_inaccurate_label": "Niet compleet",
              "legend_trend_label": "Bezetting IC-bedden",
              "title": "Bezetting IC-bedden door de tijd heen"
            },
            "date": "Laatste waardes verkregen op {{dateOfReport}}. Wordt dagelijks bijgewerkt.",
            "extra_uitleg": "Dit is het gemiddelde aantal mensen dat per dag met COVID-19 is opgenomen op een IC. Dit is een gemiddelde van de periode tussen {{dateStart}} en {{dateEnd}}. Het getal is afgerond. De meest recente dagen tellen niet mee in het gemiddelde, omdat de cijfers over deze dagen nog niet compleet zijn (opnames worden vaak een paar dagen later gemeld).",
            "kpi_bedbezetting": {
              "description": "Dit getal laat zien hoeveel IC-bedden bezet worden door coronapatiënten. Dit is **{{percentage}}%** van alle bezette IC-bedden. Dit zegt niet iets over de maximale IC-capaciteit. Als er veel coronapatiënten op de IC liggen, is er minder ruimte voor andere patiënten.",
              "title": "IC-bedden bezet door patiënten met COVID-19"
            },
            "kpi_titel": "Gemiddeld aantal intensive care-opnames per dag",
            "linechart_description": "In deze grafiek staan de IC-opnames vermeld op de dag dat mensen ook echt zijn opgenomen, in plaats van op de dag dat ze gemeld zijn. Zo kunnen we namelijk de ontwikkeling van het coronavirus in Nederland goed zien. Let op: omdat het aanmelden van IC-opnames vaak een paar dagen later gebeurt, zijn de meest recente dagen nooit compleet en kan het lijken alsof het aantal IC-opnames afneemt terwijl dit niet zo is. De lijn van het gemiddelde over de laatste zeven dagen ontbreekt daarom in het laatste deel van de grafiek. Omdat de laatste dagen niet compleet zijn, geeft de lijn daar geen goed beeld van de werkelijkheid.",
            "linechart_legend_inaccurate_label": "De laatste dagen zijn niet compleet, omdat meldingen vertraagd binnenkomen",
            "linechart_legend_trend_label": "Intensive care-opnames",
            "linechart_legend_trend_label_moving_average": "Gemiddeld aantal van 7 dagen",
            "linechart_titel": "Intensive care-opnames door de tijd heen",
            "metadata": {
              "description": "Landelijk overzicht van het aantal mensen met bevestigd COVID-19 dat per dag op een intensive care-afdeling van een ziekenhuis is opgenomen.",
              "title": "Intensive care-opnames | Coronadashboard | Rijksoverheid.nl"
            },
            "pagina_toelichting": "Groei van het aantal coronapatiënten op de intensive care (IC) kan ervoor zorgen dat ziekenhuizen het te druk krijgen. Daarom houden we hier bij hoeveel patiënten met corona worden opgenomen op de IC en hoeveel IC-bedden bezet zijn door patiënten met corona. Om dubbel tellen te voorkomen wordt alleen de eerste IC-opname van een patiënt meegeteld.",
            "reference": {
              "href": "/verantwoording#intensive-care"
            },
            "titel": "Intensive care-opnames",
            "titel_kpi": "Gemiddeld aantal intensive care-opnames per dag",
            "vaccination_status_chart": {
              "description": "Van **{{amountOfPeople}}** patiënten die tussen {{date_start}} en  met COVID-19 zijn opgenomen op de IC is bekend of ze gevaccineerd waren. De grafiek laat zien hoeveel van deze patiënten gevaccineerd waren en hoeveel niet. \n\n[Lees de uitleg waarom niet van elke patiënt bekend is of die gevaccineerd is.](/verantwoording#gevaccineerde-en-ongevaccineerde-COVID-19-patiënten)\n\nDeze cijfers zeggen alleen iets over bescherming door vaccinatie in combinatie met cijfers over hoeveel mensen gevaccineerd zijn. [Gecombineerde cijfers](https://www.rivm.nl/nieuws/ongevaccineerde-COVID-19-pati%C3%ABnten-in-het-ziekenhuis-bijna-20jaar-jonger-dan-gevaccineerde) laten zien dat de kans om als volledig gevaccineerde met COVID-19 op de IC te komen 33 keer kleiner dan als niet-gevaccineerde.",
              "labels": {
                "fully_vaccinated": "**{{fully_vaccinated_percentage, formatPercentage}}%** basisserie coronaprikken gehad (**{{fully_vaccinated, formatNumber}})**",
                "has_one_shot_or_not_vaccinated": "**{{has_one_shot_or_not_vaccinated_percentage, formatPercentage}}%** niet of gedeeltelijk gevaccineerd (**{{has_one_shot_or_not_vaccinated, formatNumber}}**)"
              },
              "source": {
                "href": "",
                "text": "RIVM"
              },
              "title": "Gevaccineerde en ongevaccineerde COVID-19-patiënten",
              "tooltip_labels": {
                "fully_vaccinated": "Basisserie coronaprikken  \n**{{fully_vaccinated_percentage, formatPercentage}}% ({{fully_vaccinated, formatNumber}})**",
                "has_one_shot_or_not_vaccinated": "Niet of gedeeltelijk gevaccineerd  \n**{{has_one_shot_or_not_vaccinated_percentage, formatPercentage}}% ({{has_one_shot_or_not_vaccinated, formatNumber}})**"
              }
            }
          },
          "sewerText": {
            "split_labels": {
              "segment_0": "0 tot 10",
              "segment_1": "10 tot 50",
              "segment_2": "50 tot 100",
              "segment_3": "100+"
            },
            "zeewolde_incomplete_manualy_override": {
              "zeewolde_date_end_in_unix_time": "1658959199",
              "zeewolde_date_start_in_unix_time": "1651615200",
              "zeewolde_label": "**Tussen 4 mei en 27 juli 2022 kan RWZI Zeewolde geen meetgegevens aanleveren in verband met een verbouwing.**",
              "zeewolde_short_label": "Tussen 4 mei en 27 juli 2022 zijn geen meetgegevens beschikbaar van RWZI Zeewolde"
            }
          },
          "positiveTestsText": {
            "chloropleth_legenda": {
              "titel": "Aantal per 100.000 inwoners"
            },
            "infected_per_age_group": {
              "description": "Deze grafiek laat zien hoeveel mensen in een bepaalde leeftijdsgroep positief getest zijn op het coronavirus, per 100.000 inwoners. In de grafiek tonen we ook gemiddelden over de afgelopen zeven dagen. Let op dat de cijfers niet overeenkomen met het aantal positief geteste mensen dat op andere plekken op deze pagina staat. Dit komt doordat de gegevens uit een andere databron komen. In dit bestand worden andere datums gebruikt, namelijk vooral de eerste ziektedag. Lees hier meer over in de [Cijferverantwoording.](/verantwoording#positieve-testen)",
              "legend": {
                "infected_age_0_9_per_100k": "0-9",
                "infected_age_10_19_per_100k": "10-19",
                "infected_age_20_29_per_100k": "20-29",
                "infected_age_30_39_per_100k": "30-39",
                "infected_age_40_49_per_100k": "40-49",
                "infected_age_50_59_per_100k": "50-59",
                "infected_age_60_69_per_100k": "60-69",
                "infected_age_70_79_per_100k": "70-79",
                "infected_age_80_89_per_100k": "80-89",
                "infected_age_90_plus_per_100k": "90+",
                "infected_overall_per_100k": "Alle leeftijden"
              },
              "legend_help_text": "Selecteer één of meerdere leeftijdsgroepen om deze te bekijken",
              "line_chart_legend_inaccurate_label": "De laatste dagen zijn niet compleet, omdat meldingen vertraagd binnenkomen",
              "title": "Positieve testen per leeftijdsgroep door de tijd heen",
              "tooltip_labels": {
                "inaccurate": "Niet compleet"
              },
              "value_annotation": "Per 100.000 inwoners"
            },
            "labels": {
              "infected": "Testen met een positieve uitslag",
              "infected_moving_average": "Testen met positieve uitslag, gemiddelde over de afgelopen zeven dagen",
              "infected_out_of_bounds": "Testen met een positieve uitslag, deze waarde is groter dan in de grafiek is weergegeven"
            },
            "tooltip_labels": {
              "annotations": "Door een correctie op 8 februari 2022 is deze waarde groter dan in de grafiek is weergegeven.",
              "ggd_infected_percentage": "Percentage positieve testen",
              "ggd_infected_percentage_moving_average": "Percentage positieve GGD-testen, gemiddelde over de afgelopen 7 dagen",
              "ggd_tested_total": "Testen met uitslag",
              "ggd_tested_total_moving_average": "Aantal GGD-testen met uitslag, gemiddelde over de afgelopen 7 dagen",
              "infected": "Testen met een positieve uitslag",
              "infected_moving_average": "Aantal testen met een positieve uitslag, gemiddelde over de afgelopen 7 dagen",
              "infected_out_of_bounds": "Testen met een positieve uitslag, deze waarde is groter dan in de grafiek is weergegeven",
              "infected_overall": "Totaal aantal positieve testen",
              "infected_per_100k": "Positief getest per 100.000",
              "infected_per_100k_moving_average": "Positief getest per 100.000, gemiddelde over de afgelopen zeven dagen"
            }
          },
          "textNl": {
            "data_driven_texts": {
              "intake_hospital_ma": {
                "value": {
                  "plural": "{{newDate}} zijn {{propertyValue}} nieuwe ziekenhuisopnames gemeld.",
                  "singular": "{{newDate}} is {{propertyValue}} nieuwe ziekenhuisopname gemeld.",
                  "zero": "{{newDate}} zijn er geen nieuwe ziekenhuisopnames gemeld."
                }
              },
              "intake_hospital_ma_nieuw": {
                "value": {
                  "plural": "Tussen {{dateStart}} en {{dateEnd}} zijn gemiddeld {{propertyValue}} mensen per dag opgenomen in het ziekenhuis. Dit is een afgerond getal. De meest recente dagen tellen niet mee in het gemiddelde, omdat de cijfers over deze dagen nog niet compleet zijn.",
                  "singular": "Tussen {{dateStart}} en {{dateEnd}} is gemiddeld {{propertyValue}} mens per dag opgenomen in het ziekenhuis. Dit is een afgerond getal.",
                  "zero": "Tussen {{dateStart}} en {{dateEnd}} zijn geen mensen opgenomen in het ziekenhuis. Dit is een afgerond getal."
                }
              },
              "intensive_care_nice": {
                "value": {
                  "plural": "Tussen {{dateStart}} en {{dateEnd}} zijn gemiddeld {{propertyValue}} mensen per dag opgenomen op een intensive care-afdeling. Dit is een afgerond getal. De meest recente dagen tellen niet mee in het gemiddelde, omdat de cijfers over deze dagen nog niet compleet zijn.",
                  "singular": "Tussen {{dateStart}} en {{dateEnd}} is gemiddeld {{propertyValue}} mens opgenomen op een intensive care-afdeling. Dit is een afgerond getal.",
                  "zero": "Tussen {{dateStart}} en {{dateEnd}} zijn er geen mensen opgenomen op een intensive care-afdeling. Dit is een afgerond getal."
                }
              },
              "sewer_text": {
                "value": {
                  "plural": "Via rioolwateronderzoek in heel Nederland houden we zicht op de ontwikkeling van het coronavirus. Deze grafiek toont het gemiddeld aantal coronavirusdeeltjes per 100.000 inwoners per dag. Op {{newDate}} zijn er gemiddeld {{propertyValue}} (x 100 miljard) virusdeeltjes gemeten in de rioolwaterzuiveringsinstallaties.",
                  "singular": "Tussen is gemiddeld {{propertyValue}} mens opgenomen op een intensive care-afdeling. Dit is een afgerond getal.",
                  "zero": "Tussen zijn er geen mensen opgenomen op een intensive care-afdeling. Dit is een afgerond getal."
                }
              },
              "tested_ggd": {
                "value": {
                  "plural": "Van alle afgenomen GGD-testen waren er {{propertyValue}} positief.",
                  "singular": "Van alle afgenomen GGD-test was er {{propertyValue}} positief.",
                  "zero": "Van alle afgenomen GGD-testen waren er geen positief."
                }
              },
              "tested_overall": {
                "value": {
                  "plural": "Tussen {{dateStart}} en {{dateEnd}} zijn er gemiddeld {{propertyValue}} mensen positief getest op COVID-19.",
                  "singular": "Tussen {{dateStart}} en {{dateEnd}} is er gemiddeld {{propertyValue}} persoon positief getest op COVID-19.",
                  "zero": "Tussen {{dateStart}} en {{dateEnd}} zijn geen mensen mensen positief getest op COVID-19."
                }
              }
            },
            "data_sitemap_titel": "Onderwerpen op dit dashboard",
            "highlighted_items": {
              "title": "Uitgelicht"
            },
            "metadata": {
              "description": "Informatie over de ontwikkeling van het coronavirus in Nederland.",
              "title": "Coronadashboard | COVID-19 | Rijksoverheid.nl"
            },
            "mini_trend_tiles": {
              "ic_opnames": {
                "menu_item_label": "Intensive care-opnames (gemiddeld)",
                "read_more_link": "Bekijk meer cijfers over Intensive care-opnames",
                "title": "Intensive care-opnames"
              },
              "positief_geteste_mensen": {
                "menu_item_label": "Positief geteste mensen (gemiddeld)",
                "read_more_link": "Bekijk meer cijfers over positief geteste mensen",
                "title": "Positief geteste mensen"
              },
              "sewer": {
                "menu_item_label": "Rioolwatermeting",
                "read_more_link": "Bekijk meer cijfers over rioolwatermeting",
                "title": "Rioolwatermeting (per 100.000 inwoners)"
              },
              "toegediende_vaccins": {
                "administered_tests": "Tot nu toe zijn er {{administeredVaccines}} prikken gezet. Dit getal omvat zowel eerste als tweede prikken. Dit getal wordt bijgewerkt op dinsdag en donderdag.",
                "sub_title": "",
                "title": "Aantal gezette prikken"
              },
              "vaccinatiegraad": {
                "booster_shots_administered_bar_label": "**Boosterprik** (18 jaar en ouder)",
                "booster_shots_administered_total": "20.9",
                "fully_vaccinated_bar_label": "**Basisserie coronaprikken gehad** (18 jaar en ouder)",
                "menu_item_label": "Vaccinatiegraad",
                "one_shot_bar_label": "**Ten minste 1 coronaprik** (18 jaar en ouder)",
                "read_more_link": "Bekijk meer cijfers over vaccinaties",
                "text": "**{{age_18_plus_fully_vaccinated, formatPercentage}}%** van alle mensen van 18 jaar en ouder heeft de basisserie coronaprikken gehad. **{{age_18_plus_has_one_shot, formatPercentage}}%** van deze leeftijdsgroep heeft ten minste 1 coronaprik gehad.",
                "title": "Vaccinatiegraad"
              },
              "ziekenhuis_opnames": {
                "menu_item_label": "Ziekenhuisopnames (gemiddeld)",
                "read_more_link": "Bekijk meer cijfers over ziekenhuisopnames",
                "title": "Ziekenhuisopnames"
              }
            },
            "nationaal_metadata": {
              "description": "Informatie over de ontwikkeling van het coronavirus in Nederland.",
              "title": "Coronadashboard | COVID-19 | Rijksoverheid.nl",
              "url": "https://coronadashboard.rijksoverheid.nl"
            },
            "quick_links": {
              "header": "Bekijk alle cijfers op dit dashboard",
              "links": {
                "gemeente": "Cijfers per gemeente",
                "internationaal": "Internationale cijfers",
                "nationaal": "Cijfers van Nederland",
                "veiligheidsregio": "Cijfers per veiligheidsregio"
              }
            },
            "risiconiveaus": {
              "belangrijk_bericht": "Deze informatie is niet actueel. \n\nVanaf 25 september 2021 geldt één risiconiveau voor het hele land. Meer informatie hierover komt binnenkort op het dashboard.",
              "selecteer_toelichting": "Iedere week wordt bekeken of de situatie rond het coronavirus zich positief of negatief ontwikkelt. De laatste keer is dit op {{last_update}} gebeurd. Op welk niveau een regio zit, hangt af van het aantal positieve testen en het aantal ziekenhuisopnames."
            },
            "secties": {
              "actuele_situatie": {
                "titel": "De actuele situatie in {{the_netherlands}}"
              }
            },
            "the_netherlands": "Nederland"
          },
          "textShared": {
            "booster_shots_administered_data_drive_text": "**{{percentage}}%** van alle mensen van 18 jaar en ouder heeft de basisserie coronaprikken gehad én een boosterprik.",
            "data_incomplete": "De laatste dagen zijn niet compleet, omdat meldingen vertraagd binnenkomen",
            "laatst_bijgewerkt": "Laatst bijgewerkt: {{date}}",
            "overview_links_header": "Alle cijfers en onderwerpen op dit dashboard",
            "secties": {
              "artikelen": {
                "beschrijving": "Uitleg over allerlei zaken rondom de coronacijfers.",
                "categorie_filters": {
                  "__all": "Alle onderwerpen",
                  "__alles": "Alle artikelen",
                  "alles": "Alle artikelen",
                  "besmettingen": "Besmettingen",
                  "gedrag": "Gedrag",
                  "kwetsbare_groepen": "Kwetsbare groepen",
                  "sterfte": "",
                  "vaccinaties": "Vaccinaties",
                  "vroege_indicatoren": "Vroege signalen",
                  "ziekenhuizen": "Ziekenhuizen"
                },
                "categorie_select_placeholder": "Selecteer artikel categorie",
                "tags": "Onderwerpen",
                "titel": "Uitgelicht"
              },
              "kpi": {
                "hospital_admissions": {
                  "plural": "In totaal liggen nu {{propertyValue}} mensen met COVID-19 in het ziekenhuis (exclusief mensen die op een intensive care-afdeling liggen).",
                  "singular": "In totaal ligt nu {{propertyValue}} persoon met COVID-19 in het ziekenhuis(exclusief mensen die op een intensive care-afdeling liggen).",
                  "zero": "In totaal liggen nu {{propertyValue}} mensen met COVID-19 in het ziekenhuis (exclusief mensen die op een intensive care-afdeling liggen)."
                },
                "ic_admissions": {
                  "plural": "In totaal liggen nu {{propertyValue}} mensen met COVID-19 op een intensive care-afdeling.",
                  "singular": "In totaal ligt nu {{propertyValue}} persoon met COVID-19 op een intensive care-afdeling",
                  "zero": "In totaal liggen nu {{propertyValue}} mensen met COVID-19 op een intensive care-afdeling."
                },
                "zeven_daags_gemiddelde": "Dat is {{differenceTrend}} het gemiddelde van de afgelopen zeven dagen ({{differenceAverage}}).",
                "zeven_daags_gemiddelde_nieuw": "Dat is {{differenceTrend}} dan het vorige gemiddelde ({{differenceAverage}})."
              },
              "meer_lezen": {
                "link": {
                  "href": "/artikelen",
                  "text": "Bekijk alle artikelen"
                },
                "omschrijving": "Hier vindt u artikelen die allerlei zaken rondom de coronacijfers uitleggen.",
                "read_weekly_message": "Lees het weekbericht",
                "titel": "Meer lezen over het coronavirus",
                "weekly_category": "Weekbericht"
              },
              "positief_getest_kaart": {
                "titel": "Positief geteste mensen in Nederland"
              },
              "risicokaart": {
                "link": {
                  "href": "/veiligheidsregio",
                  "text": "Bekijk de risiconiveaus van alle regio\'s"
                },
                "titel": "De risicokaart van Nederland"
              },
              "search": {
                "title": {
                  "gm": "Bekijk de actuele situatie in een andere gemeente of veiligheidsregio",
                  "nl": "Bekijk de actuele situatie in een gemeente of veiligheidsregio",
                  "vr": "Bekijk de actuele situatie in een andere gemeente of veiligheidsregio"
                }
              },
              "vaccination_coverage_choropleth": {
                "content": {
                  "gm": "Deze kaart laat zien hoeveel procent van de inwoners van {{municipalityName}} gevaccineerd is tegen COVID-19.\n\n*De cijfers zijn niet compleet. De vaccinatiegraad is in werkelijkheid hoger. [Lees de uitleg in de Cijferverantwoording.](/verantwoording#vaccinatie)*",
                  "nl": "Deze kaart laat zien hoeveel procent van de inwoners van elke gemeente of veiligheidsregio de basisserie coronaprikken heeft gehad of de basisserie en een boosterprik.\n\n*De cijfers zijn niet compleet. De vaccinatiegraad is in werkelijkheid hoger. [Lees de uitleg in de Cijferverantwoording.](/verantwoording#vaccinatie)*",
                  "vr": "Deze kaart laat zien hoeveel procent van de inwoners van elke gemeente in veiligheidsregio {{safetyRegion}} gevaccineerd is tegen corona.\n\n*De cijfers zijn niet compleet. De vaccinatiegraad is in werkelijkheid hoger. [Lees de uitleg in de Cijferverantwoording.](/verantwoording#vaccinatie)*"
                },
                "link_text": {
                  "gm": "Bekijk meer cijfers over vaccinaties in {{municipalityName}}",
                  "nl": "Bekijk meer cijfers over vaccinaties",
                  "vr": "Meer over vaccinaties in {{safetyRegion}}"
                },
                "title": {
                  "gm": "De vaccinatiegraad in {{municipalityName}}",
                  "nl": "De vaccinatiegraad in Nederland",
                  "vr": "De vaccinatiegraad in veiligheidsregio {{safetyRegion}}"
                }
              }
            },
            "terug_naar_landelijk": "Terug naar landelijke situatie",
            "tile_selector_uitleg": "Klik op een cijfer hieronder om meer informatie te tonen"
          }
        },
        "lastGenerated": "1671024602",
        "content": {
          "articles": [
            {
              "_id": "8b8f4a6f-c5ac-44a8-95af-5e424f6eeff1",
              "cover": {
                "asset": {
                  "_createdAt": "2022-11-28T11:20:12Z",
                  "_id": "image-09a19f8739c8996ab959100630275c42a41b0fb1-1902x1260-png",
                  "_rev": "IMItDrYnyi35RYGheogZBl",
                  "_type": "sanity.imageAsset",
                  "_updatedAt": "2022-11-28T11:20:12Z",
                  "assetId": "09a19f8739c8996ab959100630275c42a41b0fb1",
                  "extension": "png",
                  "metadata": {
                    "_type": "sanity.imageMetadata",
                    "blurHash": "VKP7IY%g?]M_xGbIofxuV@M|?^RPQ-x]E1j]RjtRtRV@",
                    "dimensions": {
                      "_type": "sanity.imageDimensions",
                      "aspectRatio": 1.5095238095238095,
                      "height": 1260,
                      "width": 1902
                    },
                    "hasAlpha": true,
                    "isOpaque": false,
                    "lqip": "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAANCAYAAACpUE5eAAAACXBIWXMAACE4AAAhOAFFljFgAAACG0lEQVQ4jY2TS08TYRSG+2uMP8KNca8mJu7UhcRLFGNM0LjQDWBABROIJMYYwEtSL6CoxFq5o5WWDr1Qhtqhc22Bdqb0zpLHzNASbo0u3pzzTb7vyZt5z3EZuU32S7eqjuz+Z0znZtcHzt8fZGQmhrxWQMkU0bLlnTv6rur6F9C/nOZBv5c7PR8Z/bVEXMuSMCyU9eL2HavaGFgH7QCtKlHFxD0WZmA0wJxokKw7NCt7QHqtd+0+HADmNpGzZRZVk/DKOlI6j7JWRFzWCc7FiIQkkqmNwx3WP6ZsbWxXPVtBz5RRU3lEYYXw2AJBb4CRPje9V+7xqrWPsPBnL3C3G9WsEF8tsmjkERWLhKAgTS0hekNMdrsZutjG0I3H9J67zfWjJ2g7fRnfxHxj4GIqz5u5JB2eCAOeCL7+cSLt7wh2vufL1Ue8ONbE4KlbdJ9p5tqR47SevIRvPNAYKKg5HnqiXOifpu3tb6YGJ4l2fSL09CsT7S8ZampnpKWH13ef0HG2mectnQh+sTEwsVZiNGrwbDrO56BCTJCRppeQ/BKx2RiB4RkWfgTxTwp8d39j1uNDUrJ7Aj2Qsv0P5xULMV1AWy2gyiZaqoBibCDF08iaRdLIOUkn5HVnfGpvt2w5KdeBtjSzipytoJpVdFt20k5fQcuUaucKaqZ06LY4DvcP584oHbJFDbZqy8htHnS4f7D/QzbEfuvA7PoXTMSaSs3I1XEAAAAASUVORK5CYII=",
                    "palette": {
                      "_type": "sanity.imagePalette",
                      "darkMuted": {
                        "_type": "sanity.imagePaletteSwatch",
                        "background": "#554052",
                        "foreground": "#fff",
                        "population": 0.04,
                        "title": "#fff"
                      },
                      "darkVibrant": {
                        "_type": "sanity.imagePaletteSwatch",
                        "background": "#741434",
                        "foreground": "#fff",
                        "population": 0,
                        "title": "#fff"
                      },
                      "dominant": {
                        "_type": "sanity.imagePaletteSwatch",
                        "background": "#0a6a9f",
                        "foreground": "#fff",
                        "population": 0.89,
                        "title": "#fff"
                      },
                      "lightMuted": {
                        "_type": "sanity.imagePaletteSwatch",
                        "background": "#b3c5d7",
                        "foreground": "#000",
                        "population": 0.19,
                        "title": "#fff"
                      },
                      "lightVibrant": {
                        "_type": "sanity.imagePaletteSwatch",
                        "background": "#dfebfc",
                        "foreground": "#000",
                        "population": 0.85,
                        "title": "#000"
                      },
                      "muted": {
                        "_type": "sanity.imagePaletteSwatch",
                        "background": "#bb618b",
                        "foreground": "#fff",
                        "population": 0.83,
                        "title": "#fff"
                      },
                      "vibrant": {
                        "_type": "sanity.imagePaletteSwatch",
                        "background": "#0a6a9f",
                        "foreground": "#fff",
                        "population": 0.89,
                        "title": "#fff"
                      }
                    }
                  },
                  "mimeType": "image/png",
                  "originalFilename": "Coronathermometer_afbeelding_artikel.png",
                  "path": "images/5mog5ask/production/09a19f8739c8996ab959100630275c42a41b0fb1-1902x1260.png",
                  "sha1hash": "09a19f8739c8996ab959100630275c42a41b0fb1",
                  "size": 48397,
                  "uploadId": "ayHNrftx7VJTAowYeIKvTNF3Uj45b0AV",
                  "url": "https://cdn.sanity.io/images/5mog5ask/production/09a19f8739c8996ab959100630275c42a41b0fb1-1902x1260.png"
                }
              },
              "intro": [
                {
                  "_key": "0d60b3a1de2d",
                  "_type": "block",
                  "children": [
                    {
                      "_key": "9cdccd2b18220",
                      "_type": "span",
                      "marks": [],
                      "text": "Op de pagina Samenvatting op het dashboard is vanaf 16 september 2022 de coronathermometer te zien. De thermometer geeft aan hoe het staat met de invloed op samenleving en de zorg door het coronavirus. De coronathermometer is gebaseerd op de epidemiologische situatie en de duiding hiervan door het RIVM."
                    }
                  ],
                  "markDefs": [],
                  "style": "normal"
                }
              ],
              "slug": {
                "_type": "slug",
                "current": "coronathermometer"
              },
              "title": "Coronathermometer"
            },
            {
              "_id": "eca21221-57b0-4b5e-926e-cdebefd634fd",
              "cover": {
                "asset": {
                  "_createdAt": "2022-12-02T09:52:25Z",
                  "_id": "image-de35ae24310e84e6595c6b73fd4f0df5f3251c7b-1920x1280-jpg",
                  "_rev": "7PF7Q5Egj0CwZrvUmXzAkz",
                  "_type": "sanity.imageAsset",
                  "_updatedAt": "2022-12-02T09:52:25Z",
                  "assetId": "de35ae24310e84e6595c6b73fd4f0df5f3251c7b",
                  "extension": "jpg",
                  "metadata": {
                    "_type": "sanity.imageMetadata",
                    "blurHash": "VZM7[i0K$}~q%h^+?aOGt8xZ=xi_kXbcRONfo3$$R%Ip",
                    "dimensions": {
                      "_type": "sanity.imageDimensions",
                      "aspectRatio": 1.5,
                      "height": 1280,
                      "width": 1920
                    },
                    "hasAlpha": false,
                    "isOpaque": true,
                    "lqip": "data:image/jpeg;base64,/9j/2wBDAAYEBQYFBAYGBQYHBwYIChAKCgkJChQODwwQFxQYGBcUFhYaHSUfGhsjHBYWICwgIyYnKSopGR8tMC0oMCUoKSj/2wBDAQcHBwoIChMKChMoGhYaKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCj/wAARCAANABQDASIAAhEBAxEB/8QAGAAAAwEBAAAAAAAAAAAAAAAAAAYIBQf/xAAjEAABBAIABgMAAAAAAAAAAAABAgMEBQARBgcSEzFRFiFh/8QAFgEBAQEAAAAAAAAAAAAAAAAAAwQF/8QAHREBAAICAgMAAAAAAAAAAAAAAQACAxIEESFBUf/aAAwDAQACEQMRAD8AbebXGyZE2LXQ3ltxxJ7bi2jsqI8jOjQrCE1VRm4Su6CgABPn9JyNOL7iS7TpskHtyTZOq2DvW8q3k5TJ+IVtpJkOPyJTCXCFD6ST6xwxNG3aW9SHBblGQFLUXz9JovPlDhSNnWGNS2GOo7ZQT71hh7zR1n//2Q==",
                    "palette": {
                      "_type": "sanity.imagePalette",
                      "darkMuted": {
                        "_type": "sanity.imagePaletteSwatch",
                        "background": "#4f2f22",
                        "foreground": "#fff",
                        "population": 0.41,
                        "title": "#fff"
                      },
                      "darkVibrant": {
                        "_type": "sanity.imagePaletteSwatch",
                        "background": "#0c3b7c",
                        "foreground": "#fff",
                        "population": 1.38,
                        "title": "#fff"
                      },
                      "dominant": {
                        "_type": "sanity.imagePaletteSwatch",
                        "background": "#bdc4cd",
                        "foreground": "#000",
                        "population": 5.52,
                        "title": "#fff"
                      },
                      "lightMuted": {
                        "_type": "sanity.imagePaletteSwatch",
                        "background": "#bdc4cd",
                        "foreground": "#000",
                        "population": 5.52,
                        "title": "#fff"
                      },
                      "lightVibrant": {
                        "_type": "sanity.imagePaletteSwatch",
                        "background": "#bae9f3",
                        "foreground": "#000",
                        "population": 0.38,
                        "title": "#000"
                      },
                      "muted": {
                        "_type": "sanity.imagePaletteSwatch",
                        "background": "#8abcc0",
                        "foreground": "#000",
                        "population": 5.45,
                        "title": "#fff"
                      },
                      "vibrant": {
                        "_type": "sanity.imagePaletteSwatch",
                        "background": "#0f90cd",
                        "foreground": "#fff",
                        "population": 4.36,
                        "title": "#fff"
                      }
                    }
                  },
                  "mimeType": "image/jpeg",
                  "originalFilename": "Testen, lab onderzoek (gratis).jpg",
                  "path": "images/5mog5ask/production/de35ae24310e84e6595c6b73fd4f0df5f3251c7b-1920x1280.jpg",
                  "sha1hash": "de35ae24310e84e6595c6b73fd4f0df5f3251c7b",
                  "size": 155678,
                  "uploadId": "l8tERJQlxAqpzB15Y71PR8zjYeBbN4MC",
                  "url": "https://cdn.sanity.io/images/5mog5ask/production/de35ae24310e84e6595c6b73fd4f0df5f3251c7b-1920x1280.jpg"
                }
              },
              "intro": [
                {
                  "_key": "8692708c24ca",
                  "_type": "block",
                  "children": [
                    {
                      "_key": "c8ca51e44fd90",
                      "_type": "span",
                      "marks": [],
                      "text": "Virusdeeltjes komen door ontlasting (poep) van besmette mensen in het rioolwater terecht. Bij de rioolwaterzuiveringsinstallaties worden uit afvalwater monsters genomen voor het RIVM. Onderzoekers bekijken deze monsters op coronavirusdeeltjes. De uitkomsten zijn op dit coronadashboard te zien."
                    }
                  ],
                  "markDefs": [],
                  "style": "normal"
                },
                {
                  "_key": "fe45c9cea404",
                  "_type": "block",
                  "children": [
                    {
                      "_key": "3a80ccb3fd64",
                      "_type": "span",
                      "marks": [],
                      "text": ""
                    }
                  ],
                  "markDefs": [],
                  "style": "normal"
                },
                {
                  "_key": "ab02b7fa41d1",
                  "_type": "block",
                  "children": [
                    {
                      "_key": "52bc62f889560",
                      "_type": "span",
                      "marks": [],
                      "text": "Het rioolwateronderzoek is één van de manieren om de verspreiding van het virus te volgen, zoals het testen van mensen op corona. Omdat er nu minder wordt getest (bij GGD en door zelftest) is het rioolwateronderzoek een belangrijke waarde als het virus misschien weer opleeft."
                    }
                  ],
                  "markDefs": [],
                  "style": "normal"
                }
              ],
              "slug": {
                "_type": "slug",
                "current": "oplevingen-van-het-virus-herkennen-door-virusdeeltjes-in-rioolwater"
              },
              "title": "Oplevingen van het virus herkennen door virusdeeltjes in rioolwater"
            },
            {
              "_id": "57e1804a-355d-49dd-9874-b9ac106f0803",
              "cover": {
                "asset": {
                  "_createdAt": "2021-06-24T14:19:24Z",
                  "_id": "image-1854308a70c106911471939bb6d9475f9758645f-7035x4690-jpg",
                  "_rev": "IACAF1d2PcBS5ljev65oBQ",
                  "_type": "sanity.imageAsset",
                  "_updatedAt": "2021-06-24T14:19:24Z",
                  "assetId": "1854308a70c106911471939bb6d9475f9758645f",
                  "extension": "jpg",
                  "metadata": {
                    "_type": "sanity.imageMetadata",
                    "dimensions": {
                      "_type": "sanity.imageDimensions",
                      "aspectRatio": 1.5,
                      "height": 4690,
                      "width": 7035
                    },
                    "hasAlpha": false,
                    "isOpaque": true,
                    "lqip": "data:image/jpeg;base64,/9j/2wBDAAYEBQYFBAYGBQYHBwYIChAKCgkJChQODwwQFxQYGBcUFhYaHSUfGhsjHBYWICwgIyYnKSopGR8tMC0oMCUoKSj/2wBDAQcHBwoIChMKChMoGhYaKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCj/wAARCAANABQDASIAAhEBAxEB/8QAGQAAAgMBAAAAAAAAAAAAAAAAAAcDBAUG/8QAIhAAAQQCAgEFAAAAAAAAAAAAAgEDBBEABQYTISIjMVFh/8QAFQEBAQAAAAAAAAAAAAAAAAAABQT/xAAdEQABBAIDAAAAAAAAAAAAAAABAAIEEQMSEyJh/9oADAMBAAIRAxEAPwDe1zmo1HcoSj6hRfbNPQv5eWhLi+3hBHjSuuUqKXQS1WIiBtJuz5E9DkPkrDIkQj83WSxt+cF1TajgryqqKZL585XNxwo/SjtSMwzJTXDkIopgzuI6uTJNxBbLzV3d4ZwbfJ5LKKANDV/eGDbs9TAy2LX/2Q==",
                    "palette": {
                      "_type": "sanity.imagePalette",
                      "darkMuted": {
                        "_type": "sanity.imagePaletteSwatch",
                        "background": "#5b5227",
                        "foreground": "#fff",
                        "population": 2.31,
                        "title": "#fff"
                      },
                      "darkVibrant": {
                        "_type": "sanity.imagePaletteSwatch",
                        "background": "#074580",
                        "foreground": "#fff",
                        "population": 1.35,
                        "title": "#fff"
                      },
                      "dominant": {
                        "_type": "sanity.imagePaletteSwatch",
                        "background": "#2993d5",
                        "foreground": "#fff",
                        "population": 7.56,
                        "title": "#fff"
                      },
                      "lightMuted": {
                        "_type": "sanity.imagePaletteSwatch",
                        "background": "#ccc0b5",
                        "foreground": "#000",
                        "population": 7.07,
                        "title": "#fff"
                      },
                      "lightVibrant": {
                        "_type": "sanity.imagePaletteSwatch",
                        "background": "#9dd0ec",
                        "foreground": "#000",
                        "population": 3.99,
                        "title": "#fff"
                      },
                      "muted": {
                        "_type": "sanity.imagePaletteSwatch",
                        "background": "#9c8d7a",
                        "foreground": "#fff",
                        "population": 7.56,
                        "title": "#fff"
                      },
                      "vibrant": {
                        "_type": "sanity.imagePaletteSwatch",
                        "background": "#2993d5",
                        "foreground": "#fff",
                        "population": 7.56,
                        "title": "#fff"
                      }
                    }
                  },
                  "mimeType": "image/jpeg",
                  "originalFilename": "ANP-423763304.jpg",
                  "path": "images/5mog5ask/production/1854308a70c106911471939bb6d9475f9758645f-7035x4690.jpg",
                  "sha1hash": "1854308a70c106911471939bb6d9475f9758645f",
                  "size": 7306516,
                  "uploadId": "JGgVI2qkpFnrMgEbFd1lcguiDQlax5LZ",
                  "url": "https://cdn.sanity.io/images/5mog5ask/production/1854308a70c106911471939bb6d9475f9758645f-7035x4690.jpg"
                }
              },
              "intro": [
                {
                  "_key": "5de40820ad12",
                  "_type": "block",
                  "children": [
                    {
                      "_key": "14522e3293520",
                      "_type": "span",
                      "marks": [],
                      "text": "Sinds het begin van de coronacrisis hebben we te maken gehad met meerdere varianten van het coronavirus. De omikronvariant komt sinds begin 2022 het vaakst voor in Nederland. Omikron zorgt voor minder druk op de zorg. Daardoor gelden er bijna geen maatregelen meer. Het kabinet blijft de ontwikkeling van het virus wel goed volgen.\n"
                    }
                  ],
                  "markDefs": [],
                  "style": "normal"
                }
              ],
              "slug": {
                "_type": "slug",
                "current": "wat-betekent-omikron-voor-nederland"
              },
              "title": "Wat betekent omikron voor Nederland?"
            }
          ],
          "topicalStructure": {
            "kpiThemes": {
              "themes": [
                {
                  "links": [
                    {
                      "cta": {
                        "href": "/landelijk/reproductiegetal",
                        "title": "Reproductiegetal"
                      }
                    },
                    {
                      "cta": {
                        "href": "/landelijk/sterfte",
                        "title": "Sterfte"
                      }
                    }
                  ],
                  "linksLabelDesktop": "Meer onderwerpen:",
                  "linksLabelMobile": "Meer over \'Ontwikkeling van het virus\':",
                  "subTitle": null,
                  "themeIcon": "eye.svg",
                  "tiles": [
                    {
                      "cta": {
                        "href": "/landelijk/positief-geteste-mensen",
                        "title": "Lees meer"
                      },
                      "description": [
                        {
                          "_key": "fa466b89c963",
                          "_type": "block",
                          "children": [
                            {
                              "_key": "7cffcb89cd720",
                              "_type": "span",
                              "marks": [],
                              "text": "Het aantal aan de GGD gemelde personen met een positieve coronatestuitslag steeg licht "
                            },
                            {
                              "_key": "1737ece3fb59",
                              "_type": "span",
                              "marks": [
                                "strong"
                              ],
                              "text": "(+7%)"
                            },
                            {
                              "_key": "575d3287464d",
                              "_type": "span",
                              "marks": [],
                              "text": ". Het aantal bij de GGD geteste personen bleef ongeveer gelijk "
                            },
                            {
                              "_key": "a911f016e6aa",
                              "_type": "span",
                              "marks": [
                                "strong"
                              ],
                              "text": "(+4%)"
                            },
                            {
                              "_key": "fac59d390b5e",
                              "_type": "span",
                              "marks": [],
                              "text": "."
                            }
                          ],
                          "markDefs": [],
                          "style": "normal"
                        }
                      ],
                      "kpiValue": "+7%",
                      "sourceLabel": "Waarde van 5 - 11 december 2022 · Bron: RIVM",
                      "tileIcon": "ggd_testen.svg",
                      "title": "Positieve testen",
                      "trendIcon": {
                        "color": "RED",
                        "direction": "UP",
                        "intensity": 1
                      }
                    },
                    {
                      "cta": {
                        "href": "/landelijk/rioolwater",
                        "title": "Lees meer"
                      },
                      "description": [
                        {
                          "_key": "295d74013934",
                          "_type": "block",
                          "children": [
                            {
                              "_key": "728b7a14911c0",
                              "_type": "span",
                              "marks": [],
                              "text": "Het landelijk gemiddelde aantal virusdeeltjes bleef ongeveer gelijk "
                            },
                            {
                              "_key": "51133e140f49",
                              "_type": "span",
                              "marks": [
                                "strong"
                              ],
                              "text": "(+3%) "
                            },
                            {
                              "_key": "062614ea5375",
                              "_type": "span",
                              "marks": [],
                              "text": "in week 48 (28 november - 4 december). Het aantal virusdeeltjes steeg in de eerste helft van week 49 (5 - 7 december) "
                            },
                            {
                              "_key": "2e3695e15563",
                              "_type": "span",
                              "marks": [
                                "strong"
                              ],
                              "text": "(+12%)"
                            },
                            {
                              "_key": "9ac7a629707f",
                              "_type": "span",
                              "marks": [],
                              "text": "."
                            }
                          ],
                          "markDefs": [],
                          "style": "normal"
                        }
                      ],
                      "kpiValue": "+3%",
                      "sourceLabel": "Waarde van 28 november - 4 december 2022 · Bron: RIVM",
                      "tileIcon": "rioolvirus.svg",
                      "title": "Rioolwater",
                      "trendIcon": {
                        "color": null,
                        "direction": null,
                        "intensity": null
                      }
                    },
                    {
                      "cta": {
                        "href": "/landelijk/varianten",
                        "title": "Lees meer"
                      },
                      "description": [
                        {
                          "_key": "042c41203961",
                          "_type": "block",
                          "children": [
                            {
                              "_key": "c5c4eeec5da60",
                              "_type": "span",
                              "marks": [],
                              "text": "Op dit moment neemt omikron subvariant BQ.1 (waaronder BQ.1.1) sterk toe en wordt mogelijk dominant in Nederland. Het lijkt er niet op dat deze subvarianten ziekmakender zijn dan de eerdere omikronvarianten. Recombinant XBB neemt ook toe. Deze variant combineert eigenschappen van verschillende omikronvarianten."
                            }
                          ],
                          "markDefs": [],
                          "style": "normal"
                        }
                      ],
                      "kpiValue": null,
                      "sourceLabel": "Bericht van 13 december 2022 · Bron: RIVM",
                      "tileIcon": "varianten.svg",
                      "title": "Virusvarianten",
                      "trendIcon": {
                        "color": null,
                        "direction": null,
                        "intensity": null
                      }
                    }
                  ],
                  "title": "Ontwikkeling van het virus"
                },
                {
                  "links": [
                    {
                      "cta": {
                        "href": "/landelijk/verpleeghuiszorg",
                        "title": "Verpleeghuiszorg"
                      }
                    },
                    {
                      "cta": {
                        "href": "/landelijk/gehandicaptenzorg",
                        "title": "Gehandicaptenzorg"
                      }
                    }
                  ],
                  "linksLabelDesktop": "Meer onderwerpen:",
                  "linksLabelMobile": "Meer over \'Gevolgen voor de zorg\':",
                  "subTitle": null,
                  "themeIcon": "medische_screening.svg",
                  "tiles": [
                    {
                      "cta": {
                        "href": "/landelijk/ziekenhuis-opnames",
                        "title": "Lees meer"
                      },
                      "description": [
                        {
                          "_key": "43c3690d0e6d",
                          "_type": "block",
                          "children": [
                            {
                              "_key": "7962f43303950",
                              "_type": "span",
                              "marks": [],
                              "text": "Het aantal nieuwe ziekenhuisopnames van patiënten met COVID steeg "
                            },
                            {
                              "_key": "54db714a9956",
                              "_type": "span",
                              "marks": [
                                "strong"
                              ],
                              "text": "(+16%)"
                            },
                            {
                              "_key": "e9e2509e3dce",
                              "_type": "span",
                              "marks": [],
                              "text": " vergeleken met de week ervoor."
                            }
                          ],
                          "markDefs": [],
                          "style": "normal"
                        }
                      ],
                      "kpiValue": "+16%",
                      "sourceLabel": "Waarde van 5 - 11 december 2022 · Bron: RIVM",
                      "tileIcon": "ziekenhuis.svg",
                      "title": "Ziekenhuisopnames",
                      "trendIcon": {
                        "color": "RED",
                        "direction": "UP",
                        "intensity": 2
                      }
                    },
                    {
                      "cta": {
                        "href": "/landelijk/intensive-care-opnames",
                        "title": "Lees meer"
                      },
                      "description": [
                        {
                          "_key": "ba1dcd7b0b1c",
                          "_type": "block",
                          "children": [
                            {
                              "_key": "72afc0f3eaf20",
                              "_type": "span",
                              "marks": [],
                              "text": "Het percentage IC-bedden met COVID-patiënten bedraagt "
                            },
                            {
                              "_key": "777a5d0dac2e",
                              "_type": "span",
                              "marks": [
                                "strong"
                              ],
                              "text": "3,5%"
                            },
                            {
                              "_key": "3f640db8bb15",
                              "_type": "span",
                              "marks": [],
                              "text": " van de totale IC-capaciteit. Het percentage IC-bedden met COVID-patiënten is "
                            },
                            {
                              "_key": "5f691c69f63e",
                              "_type": "span",
                              "marks": [
                                "strong"
                              ],
                              "text": "5,0%"
                            },
                            {
                              "_key": "362941e986ea",
                              "_type": "span",
                              "marks": [],
                              "text": " van het totaal aantal bezette IC-bedden."
                            }
                          ],
                          "markDefs": [],
                          "style": "normal"
                        }
                      ],
                      "kpiValue": "3,5%",
                      "sourceLabel": "Waarde van 5 - 11 december 2022 · Bron: LCPS",
                      "tileIcon": "intensive_care_opnames.svg",
                      "title": "Bezetting IC",
                      "trendIcon": {
                        "color": null,
                        "direction": null,
                        "intensity": null
                      }
                    },
                    {
                      "cta": {
                        "href": null,
                        "title": null
                      },
                      "description": [
                        {
                          "_key": "1469d112a879",
                          "_type": "block",
                          "children": [
                            {
                              "_key": "a9bfc90501d80",
                              "_type": "span",
                              "marks": [],
                              "text": "Bij de verpleegafdelingen van de ziekenhuizen staat de beschikbaarheid van de zorg onder druk. Dit komt onder andere door het uitvallen van personeel. Het ziekteverzuim onder het zorgpersoneel op de verpleegafdelingen en IC’s steeg licht naar "
                            },
                            {
                              "_key": "842044692893",
                              "_type": "span",
                              "marks": [
                                "strong"
                              ],
                              "text": "8,0%"
                            },
                            {
                              "_key": "e48bdd95c85b",
                              "_type": "span",
                              "marks": [],
                              "text": "."
                            }
                          ],
                          "markDefs": [],
                          "style": "normal"
                        }
                      ],
                      "kpiValue": "8,0%",
                      "sourceLabel": "Bericht van 13 december 2022 · Bron: LCPS",
                      "tileIcon": "arts.svg",
                      "title": "Druk op de zorg",
                      "trendIcon": {
                        "color": null,
                        "direction": null,
                        "intensity": null
                      }
                    }
                  ],
                  "title": "Gevolgen voor de zorg"
                }
              ]
            },
            "measureTheme": {
              "subTitle": [
                {
                  "_key": "aea3c96f9f38",
                  "_type": "block",
                  "children": [
                    {
                      "_key": "7d9cd538d71a0",
                      "_type": "span",
                      "marks": [],
                      "text": " "
                    },
                    {
                      "_key": "a630f36570d1",
                      "_type": "span",
                      "marks": [
                        "strong",
                        "fe50164aeaea"
                      ],
                      "text": "Adviezen"
                    },
                    {
                      "_key": "6d7c1f3be991",
                      "_type": "span",
                      "marks": [],
                      "text": " om uzelf en anderen te beschermen. "
                    }
                  ],
                  "markDefs": [
                    {
                      "_key": "fe50164aeaea",
                      "_type": "link",
                      "href": "/landelijk/geldende-adviezen"
                    }
                  ],
                  "style": "normal"
                }
              ],
              "themeIcon": "maatregelen.svg",
              "tiles": [
                {
                  "description": [
                    {
                      "_key": "775664115374",
                      "_type": "block",
                      "children": [
                        {
                          "_key": "984280b9b64a0",
                          "_type": "span",
                          "marks": [],
                          "text": "Heeft u klachten? Blijf thuis en doe een zelftest."
                        }
                      ],
                      "markDefs": [],
                      "style": "normal"
                    }
                  ],
                  "tileIcon": "basisregels_testen.svg"
                },
                {
                  "description": [
                    {
                      "_key": "9c53f8735abb",
                      "_type": "block",
                      "children": [
                        {
                          "_key": "38fd689e65620",
                          "_type": "span",
                          "marks": [],
                          "text": "Heeft u corona? Ga in isolatie."
                        }
                      ],
                      "markDefs": [],
                      "style": "normal"
                    }
                  ],
                  "tileIcon": "elderly.svg"
                },
                {
                  "description": [
                    {
                      "_key": "4943661dfb19",
                      "_type": "block",
                      "children": [
                        {
                          "_key": "ef1a0e56c9430",
                          "_type": "span",
                          "marks": [],
                          "text": "Haal een (herhaal)prik tegen corona."
                        }
                      ],
                      "markDefs": [],
                      "style": "normal"
                    }
                  ],
                  "tileIcon": "vaccinaties.svg"
                }
              ],
              "title": "Wat kunt u zelf doen om besmettingen te voorkomen?"
            },
            "thermometer": {
              "articleReference": [
                {
                  "_key": "0ba8747bed75",
                  "_type": "block",
                  "children": [
                    {
                      "_key": "f7fe8bb65bbd",
                      "_type": "span",
                      "marks": [],
                      "text": "Meer informatie in het artikel over "
                    },
                    {
                      "_key": "1e86a6159730",
                      "_type": "span",
                      "marks": [
                        "32ce85ee49b9"
                      ],
                      "text": "de coronathermometer en de standen"
                    },
                    {
                      "_key": "284fff4a31f1",
                      "_type": "span",
                      "marks": [],
                      "text": "."
                    }
                  ],
                  "markDefs": [
                    {
                      "_key": "32ce85ee49b9",
                      "_type": "link",
                      "href": "/artikelen/coronathermometer"
                    }
                  ],
                  "style": "normal"
                }
              ],
              "collapsibleTitle": "Wat betekenen de vier standen?",
              "currentLevel": 1,
              "datesLabel": "De verwachting voor 6 tot 20 december 2022",
              "icon": "coronathermometer.svg",
              "levelDescription": "De stand is op 6 december 2022 **bepaald** op 1. De stand is ondanks lichte stijgingen gelijk gebleven. ",
              "sourceLabel": "Bron: RIVM",
              "subTitle": null,
              "thermometerLevels": [
                {
                  "description": "De invloed op de samenleving en de zorg door de ziektelast van het virus is **{{label}}**.",
                  "label": "Laag",
                  "level": 1
                },
                {
                  "description": "De invloed op de samenleving en de zorg door de ziektelast van het virus is **{{label}}**. Vooral kwetsbare mensen lopen meer risico.",
                  "label": "Verhoogd",
                  "level": 2
                },
                {
                  "description": "De invloed op de samenleving en de zorg door de ziektelast van het virus is **{{label}}**.",
                  "label": "Hoog",
                  "level": 3
                },
                {
                  "description": "De invloed op de samenleving en de zorg door de ziektelast van het virus is **{{label}}**.",
                  "label": "Zeer hoog",
                  "level": 4
                }
              ],
              "tileTitle": "**De stand**",
              "timeline": {
                "ThermometerTimelineEvents": [
                  {
                    "date": "2022-09-16",
                    "dateEnd": "2022-09-27",
                    "description": "De impact op de samenleving en de zorg door de ziektelast van het virus is laag.",
                    "level": 1,
                    "title": "Laag"
                  },
                  {
                    "date": "2022-09-27",
                    "dateEnd": "2022-10-11",
                    "description": "De impact op de samenleving en de zorg door de ziektelast van het virus is laag.",
                    "level": 1,
                    "title": "Laag"
                  },
                  {
                    "date": "2022-10-11",
                    "dateEnd": "2022-10-25",
                    "description": "De invloed op de samenleving en de zorg door de ziektelast van het virus is verhoogd.",
                    "level": 2,
                    "title": "Verhoogd"
                  },
                  {
                    "date": "2022-10-25",
                    "dateEnd": "2022-11-08",
                    "description": "De invloed op de samenleving en de zorg door de ziektelast van het virus is verhoogd.",
                    "level": 2,
                    "title": "Verhoogd"
                  },
                  {
                    "date": "2022-11-08",
                    "dateEnd": "2022-11-22",
                    "description": "De invloed op de samenleving en de zorg door de ziektelast van het virus is verhoogd.",
                    "level": 2,
                    "title": "Verhoogd"
                  },
                  {
                    "date": "2022-11-22",
                    "dateEnd": "2022-12-06",
                    "description": "De impact op de samenleving en de zorg door de ziektelast van het virus is laag.",
                    "level": 1,
                    "title": "Laag"
                  },
                  {
                    "date": "2022-12-06",
                    "dateEnd": "2022-12-20",
                    "description": "De impact op de samenleving en de zorg door de ziektelast van het virus is laag.",
                    "level": 1,
                    "title": "Laag"
                  }
                ],
                "legendLabel": "Uitgelichte stand coronathermometer",
                "title": "Tijdlijn coronathermometer",
                "todayLabel": "Vandaag",
                "tooltipLabel": "De huidige stand geldt tot **20 december 2022**. De nieuwe stand zal dan worden bepaald."
              },
              "title": "Coronathermometer",
              "trendIcon": {
                "color": null,
                "direction": null
              }
            },
            "topicalConfig": {
              "description": [
                {
                  "_key": "35f4596eb090",
                  "_type": "block",
                  "children": [
                    {
                      "_key": "76c8d5b3dd2d",
                      "_type": "span",
                      "marks": [],
                      "text": "De meest actuele cijfers vindt u op "
                    },
                    {
                      "_key": "2edbea7030fd",
                      "_type": "span",
                      "marks": [
                        "strong",
                        "8ea1c073d6cb"
                      ],
                      "text": "landelijk"
                    },
                    {
                      "_key": "66fb3f30d113",
                      "_type": "span",
                      "marks": [],
                      "text": "."
                    }
                  ],
                  "markDefs": [
                    {
                      "_key": "8ea1c073d6cb",
                      "_type": "link",
                      "href": "/landelijk/vaccinaties"
                    }
                  ],
                  "style": "normal"
                }
              ],
              "title": "De situatie in Nederland"
            },
            "weeklySummary": {
              "items": [
                {
                  "description": "De Coronathermometer staat op stand",
                  "isThermometerMetric": true,
                  "tileIcon": "coronathermometer.svg"
                },
                {
                  "description": "Ontwikkeling van het virus: de verspreiding van het virus stijgt licht verder.",
                  "isThermometerMetric": false,
                  "tileIcon": "eye.svg"
                },
                {
                  "description": "Gevolgen voor de zorg: bij de verpleegafdelingen van de ziekenhuizen staat de beschikbaarheid van de zorg nog steeds onder druk. Het aantal nieuwe ziekenhuisopnames van COVID-patiënten steeg.",
                  "isThermometerMetric": false,
                  "tileIcon": "medische_screening.svg"
                }
              ],
              "title": "Weeksamenvatting"
            }
          }
        }
      },
      "__N_SSG": true
    },
    "page": "/",
    "query": {},
    "buildId": "PIevHAfQRpDkeyktIkTfe",
    "isFallback": false,
    "gsp": true,
    "locale": "nl",
    "locales": [
      "nl",
      "en"
    ],
    "defaultLocale": "nl",
    "domainLocales": [
      {
        "domain": "coronadashboard.government.nl",
        "defaultLocale": "en"
      }
    ],
    "scriptLoader": []
  }' ;
$arrayData = json_decode($data) ;
var_dump($arrayData) ;