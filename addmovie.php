<html>
    <?php

include('inc/head.php');

?>

    <body>
        <div class="container">
            <?php

include('inc/header.php');

?>

            <div class="row">
                <div class="col">
                    <form>
                        <table class="form-layout">
                            <tr>
                                <td><label for="title">Title:</label></td>
                                <td><input type="text" id="title"></td>
                            </tr>
                            <tr>
                                <td><label for="directedBy">Directed by:</label></td>
                                <td><input type="text" id="directedBy"></td>
                            </tr>
                            <tr>
                                <td><label for="releaseDate">Release date:</label></td>
                                <td><input type="text" id="releaseDate" placeholder="dd-mm-yyyy"></td>
                            </tr>
                            <tr>
                                <td><label for="originalLanguage">Original language:</label></td>
                                <td><input type="text" id="originalLanguage"></td>
                            </tr>
                            <tr>
                                <td><label for="producedBy">Produced by:</label></td>
                                <td><input type="text" id="producedBy"></td>
                            </tr>
                            <tr>
                                <td><label for="duration">Duration (in minutes):</label></td>
                                <td><input type="text" id="duration"></td>
                            </tr>
                            <tr>
                                <td><label for="soundtrack">Soundtrack:</label></td>
                                <td><input type="text" id="soundtrack"> </td>
                            </tr>

                            <tr>
                                <td><label for="country">Country of origin:</label></td>
                                <td><input type="text" id="country"></td>
                            </tr>
                            <tr>
                                <td><label for="cast">Cast members:</label></td>
                                <td><textarea name="cast" id="cast" cols="25" rows="5"
                                        placeholder="Write the castmembers down using a comma after each name."></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td><label for="summary">Summary:</label></td>
                                <td><textarea name="summary" id="summary" cols="25" rows="5"
                                        placeholder="Write a summary of the movie here but no spoilers!"></textarea>
                                </td>
                            </tr>
                        </table>


                        <div class="col">
                            <table class="form-layout">
                                <tr>

                                    <td><label for="genre">Choose a genre:</label></td>
                                    <td><select name="genre" id="genre" style="margin-left:23px;">
                                            <option value="comedy">Comedy</option>
                                            <option value="horror">Horror</option>
                                            <option value="thriller">Thriller</option>
                                            <option value="action">Action</option>
                                            <option value="romance">Romance</option>
                                            <option value="detective">Detective</option>
                                            <option value="drama">Drama</option>
                                    </td> </select>

                                </tr>
                                <tr>

                                    <td><label for="sequel">Sequel:</label></td>
                                    <td><select name="sequel" id="sequel" style="margin-left:23px;">
                                            <option value="isSequel">This movie is a sequel</option>
                                            <option value="hasSequel">This movie has a sequel</option>
                                            <option value="noneOfAbove">None of the above</option>
                                    </td></select>

                                </tr>

                            </table>



                            <li class="form-layout">
                                <br>
                                <td><label for="viewerWarnings">all viewer advisory warnings that
                                        apply:</label></td>
                                <br><br>
                                <input type="radio" name="age" value="all" id="option-1">
                                <label for="option-1">Suitable for all ages</label>
                                <input type="radio" name="age" value="sixUp" id="option-2">
                                <label for="option-2">Suitable for ages 6 and up</label>
                                <input type="radio" name="age" value="twelveUp" id="option-3">
                                <label for="option-3">Suitable for ages 12 and up</label>
                                <input type="radio" name="age" value="sixteenUp" id="option-4">
                                <label for="option-4">Suitable for ages 16 and up</label>
                                <input type="radio" name="age" value="eighteenUp" id="option-5">
                                <label for="option-5">Suitable for ages 18 and up</label>
                                <br><br>
                                <input type="radio" name="sex" value="sex" id="option-6">
                                <label for="option-6">Contains sex or nudity</label>
                                <input type="radio" name="drugs" value="drugs" id="option-7">
                                <label for="option-7">Contains drugs and/or alcohol</label>
                                <input type="radio" name="violence" value="violence" id="option-8">
                                <label for="option-8">Contains violence</label>
                                <input type="radio" name="fear" value="fear" id="option-9>">
                                <label for="option-9">Can cause fear</label>
                                <input type="radio" name="discrimination" value="discrimination" id="option-10">
                                <label for="option-10">Contains discrimination</label>
                                <input type="radio" name="foulLanguage" value="foulLanguage" id="option-11">
                                <label for="option-11">Contains foul language</label>
                                <br><br>
                                <input type="submit" value="Submit">
                            </li>

                    </form>
                </div>
            </div>
            <?php

include('inc/footer.php');

?>
        </div>
    </body>


</html>
