<?php
namespace Entity;

class Movie {
		private $id;
		private $imdbId;
		private $title;
		private $year;
		private $cast;
		private $director;
		private $writer;
		private $plot;
		private $rating;
		private $votes;
		private $runtimes;
		private $trailerUrl;
		private $dateCreated;
		private $dateModified;

		    /**
		     * Gets the value of id.
		     *
		     * @return mixed
		     */
		    public function getId()
		    {
		        return $this->id;
		    }

		    /**
		     * Sets the value of id.
		     *
		     * @param mixed $id the id
		     *
		     * @return self
		     */
		    public function setId($id)
		    {
		        $this->id = $id;

		        return $this;
		    }

		    /**
		     * Gets the value of imdbId.
		     *
		     * @return mixed
		     */
		    public function getImdbId()
		    {
		        return $this->imdbId;
		    }

		    /**
		     * Gets the value of imdbId.
		     *
		     * @return mixed
		     */
		    public function getUrlPoster()
		    {
		    	$urlPoster = BASE_URL . "/posters/" . $this->imdbId . ".jpg";
		        return $urlPoster;
		    }


		    /**
		     * Sets the value of imdbId.
		     *
		     * @param mixed $imdbId the imdbId
		     *
		     * @return self
		     */
		    public function setImdbId($imdbId)
		    {
		        $this->imdbId = $imdbId;

		        return $this;
		    }

		    /**
		     * Gets the value of title.
		     *
		     * @return mixed
		     */
		    public function getTitle()
		    {
		        return $this->title;
		    }

		    /**
		     * Sets the value of title.
		     *
		     * @param mixed $title the title
		     *
		     * @return self
		     */
		    public function setTitle($title)
		    {
		        $this->title = $title;

		        return $this;
		    }

		    /**
		     * Gets the value of year.
		     *
		     * @return mixed
		     */
		    public function getYear()
		    {
		        return $this->year;
		    }

		    /**
		     * Sets the value of year.
		     *
		     * @param mixed $year the year
		     *
		     * @return self
		     */
		    public function setYear($year)
		    {
		        $this->year = $year;

		        return $this;
		    }

		    /**
		     * Gets the value of cast.
		     *
		     * @return mixed
		     */
		    public function getCast()
		    {
		        return $this->cast;
		    }

		    /**
		     * Sets the value of cast.
		     *
		     * @param mixed $cast the cast
		     *
		     * @return self
		     */
		    public function setCast($cast)
		    {
		        $this->cast = $cast;

		        return $this;
		    }

		    /**
		     * Gets the value of director.
		     *
		     * @return mixed
		     */
		    public function getDirector()
		    {
		        return $this->director;
		    }

		    /**
		     * Sets the value of director.
		     *
		     * @param mixed $director the director
		     *
		     * @return self
		     */
		    public function setDirector($director)
		    {
		        $this->director = $director;

		        return $this;
		    }

		    /**
		     * Gets the value of writer.
		     *
		     * @return mixed
		     */
		    public function getWriter()
		    {
		        return $this->writer;
		    }

		    /**
		     * Sets the value of writer.
		     *
		     * @param mixed $writer the writer
		     *
		     * @return self
		     */
		    public function setWriter($writer)
		    {
		        $this->writer = $writer;

		        return $this;
		    }

		    /**
		     * Gets the value of plot.
		     *
		     * @return mixed
		     */
		    public function getPlot()
		    {
		        return $this->plot;
		    }

		    /**
		     * Sets the value of plot.
		     *
		     * @param mixed $plot the plot
		     *
		     * @return self
		     */
		    public function setPlot($plot)
		    {
		        $this->plot = $plot;

		        return $this;
		    }

		    /**
		     * Gets the value of rating.
		     *
		     * @return mixed
		     */
		    public function getRating()
		    {
		        return $this->rating;
		    }

		    /**
		     * Sets the value of rating.
		     *
		     * @param mixed $rating the rating
		     *
		     * @return self
		     */
		    public function setRating($rating)
		    {
		        $this->rating = $rating;

		        return $this;
		    }

		    /**
		     * Gets the value of votes.
		     *
		     * @return mixed
		     */
		    public function getVotes()
		    {
		        return $this->votes;
		    }

		    /**
		     * Sets the value of votes.
		     *
		     * @param mixed $votes the votes
		     *
		     * @return self
		     */
		    public function setVotes($votes)
		    {
		        $this->votes = $votes;

		        return $this;
		    }

		    /**
		     * Gets the value of runtimes.
		     *
		     * @return mixed
		     */
		    public function getRuntimes()
		    {
		        return $this->runtimes;
		    }

		    /**
		     * Sets the value of runtimes.
		     *
		     * @param mixed $runtimes the runtimes
		     *
		     * @return self
		     */
		    public function setRuntimes($runtimes)
		    {
		        $this->runtimes = $runtimes;

		        return $this;
		    }

		    /**
		     * Gets the value of trailerUrl.
		     *
		     * @return mixed
		     */
		    public function getTrailerUrl()
		    {
		        return $this->trailerUrl;
		    }

		    /**
		     * Sets the value of trailerUrl.
		     *
		     * @param mixed $trailerUrl the trailer url
		     *
		     * @return self
		     */
		    public function setTrailerUrl($trailerUrl)
		    {
		        $this->trailerUrl = $trailerUrl;

		        return $this;
		    }

		    /**
		     * Gets the value of dateCreated.
		     *
		     * @return mixed
		     */
		    public function getDateCreated()
		    {
		        return $this->dateCreated;
		    }

		    /**
		     * Sets the value of dateCreated.
		     *
		     * @param mixed $dateCreated the date created
		     *
		     * @return self
		     */
		    public function setDateCreated($dateCreated)
		    {
		        $this->dateCreated = $dateCreated;

		        return $this;
		    }

}