from google.ads.googleads.client import GoogleAdsClient
import sys
import json

def main(cliente, argv):
    
    
    # Obtenener parametros
  
    customer_id = "8494089105"
    
    palabra_busqueda = argv[1:]
    palabra_busqueda = " ".join(palabra_busqueda)
    
    
    """The main method that creates all necessary entities for the example.

    Args:
        client: an initialized GoogleAdsClient instance.
        customer_id: a client customer ID.
    """
    if(len(palabra_busqueda) > 0 ):
        generate_historical_metrics(client, customer_id, palabra_busqueda)
        
    else:
        print("Inserte una palabra!")


def generate_historical_metrics(client, customer_id, palabra_busqueda):
    """Generates historical metrics and prints the results.

    Args:
        client: an initialized GoogleAdsClient instance.
        customer_id: a client customer ID.
    """
    googleads_service = client.get_service("GoogleAdsService")
    keyword_plan_idea_service = client.get_service("KeywordPlanIdeaService")
    request = client.get_type("GenerateKeywordHistoricalMetricsRequest")
    request.customer_id = customer_id
    
    
    # propiedad de busqueda
    request.keywords = [palabra_busqueda]
    
    
    
    
    # Geo target constant 2840 is for USA.
    request.geo_target_constants.append(
        googleads_service.geo_target_constant_path("2840")
    )
    request.keyword_plan_network = (
        client.enums.KeywordPlanNetworkEnum.GOOGLE_SEARCH
    )
    # Language criteria 1000 is for English. For the list of language criteria
    # IDs, see:
    # https://developers.google.com/google-ads/api/reference/data/codes-formats#languages
    request.language = googleads_service.language_constant_path("1000")

    response = keyword_plan_idea_service.generate_keyword_historical_metrics(
        request=request
    )

    for result in response.results:
        metrics = result.keyword_metrics
     
     
        data = {
        "approximate_monthly_searches": metrics.avg_monthly_searches,
        "competition_level": metrics.competition,
        "competition_index": metrics.competition_index, 
        "low_range_micros": metrics.low_top_of_page_bid_micros,
        "high_range_micros": metrics.high_top_of_page_bid_micros
    
    }
       

        # Approximate number of searches on this query for the past twelve
        # months.
        Resultados = [data]
        for month in metrics.monthly_search_volumes:
            resultado = {"approximately" : month.monthly_searches, "month" : month.month.name, "year" : month.year }
               
            
            Resultados.append(resultado)
            
        Resultados = json.dumps(Resultados)
        print(Resultados)


if __name__ == '__main__':
    client = GoogleAdsClient.load_from_storage("./credenciales.yaml")
    main(client, sys.argv)
    