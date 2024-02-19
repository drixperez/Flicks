// URL parameters - THESE SHOULD BE FROM DATABASE
const services = 'all4';
const country = 'gb';
const genres = '14';
const output_language = 'en';
const order_by = 'popularity_alltime';

// Function to fetch data and populate array of dictionaries
async function fetchDataAndPopulateArray() {
  // Construct the URL based on parameters
  const url = `https://streaming-availability.p.rapidapi.com/search/filters?services=${services}&country=${country}&genres=${genres}&output_language=${output_language}&order_by=${order_by}`;
  
  // Define options for the fetch request
  const options = {
    method: 'GET',
    headers: {
      'X-RapidAPI-Key': '20d3a2cb72msh3c393cf1fc1b724p1c0fbcjsn994e43382dd1',
      'X-RapidAPI-Host': 'streaming-availability.p.rapidapi.com'
    }
  };

  const response = await fetch(url, options);
  const ssdata = await response.json();
  
  // Log the data from the streaming availability API
  console.log("Streaming Availability API Data:", ssdata);
  
  // Create an empty array to store film information
  const filmsArray = [];
  const imdbIds = ssdata.result.map(item => item.imdbId);
  // Iterate through the result and add film information to the array
  for (let i = 0; i < ssdata.result.length; i++) {
      const imdbId = ssdata.result[i].imdbId; // Accessing the imdbId property directly
      const imdbData = await fetchIMDbDataWithRetry(imdbId); // Assuming you have defined fetchIMDbDataWithRetry function
      

      // Create a dictionary for the film and add it to the array
      const filmInfo = {
          services: ssdata.result[i].streamingInfo.gb,
          title: ssdata.result[i].title,
          year: ssdata.result[i].year,
          cast: ssdata.result[i].cast,
          directors: ssdata.result[i].directors,
          rating: imdbData.ratingsSummary.aggregateRating, 
          blurb: ssdata.result[i].overview, 
          image: imdbData.primaryImage.url,
          imdbId: imdbId
      };

      filmsArray.push(filmInfo);
  }

  
  // Display success message and the array of film information
  console.log("Array of film information:", filmsArray); // Log the array to the console
  document.getElementById('result').textContent = "Check console log for films array";
}

// This function handles errors e.g exceeding request quote
async function fetchIMDbDataWithRetry(imdbId, retryCount = 3) {
  let attempt = 0;
  while (attempt < retryCount) {
    const result = await fetchIMDbData(imdbId);
    if (result) {
      return result;
    } else {
      console.error(`Failed to fetch IMDb data (attempt ${attempt + 1})`);
      attempt++;
    }
  }
  throw new Error('Failed to fetch IMDb data after multiple attempts.');
}

// Function to fetch IMDb data for a specific IMDb ID
async function fetchIMDbData(imdbId) {
  const url = 'https://imdb146.p.rapidapi.com/v1/title/?id='+imdbId;
  const options = {
	method: 'GET',
	headers: {
		'X-RapidAPI-Key': '8446d3330bmsh92d50f888289f11p13c2eejsnc4803bf05ae9',
		'X-RapidAPI-Host': 'imdb146.p.rapidapi.com'
	}
};

const response2 = await fetch(url, options);
const imdb_info = await response2.json();
console.log(imdb_info)
return imdb_info
}


// Call the function to fetch data and populate the array of dictionaries
fetchDataAndPopulateArray();


