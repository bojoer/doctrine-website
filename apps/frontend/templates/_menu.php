<ul>
  <?php
  $links = array();
  $links['@homepage'] = 'home';
  $links['@about'] = 'about';
  $links['@projects'] = 'projects';

  $projects = Project::getPrimaryProjects();
  foreach ($projects as $project)
  {
    $links[$project->getRoute()] = strtolower($project->getShortTitle());
  }

  $links['@blog'] = 'blog';
  $links['http://www.doctrine-project.org/jira'] = 'development';
  $links['@contribute'] = 'contribute';
  $links['@community'] = 'community';
  //$links['http://wiki.doctrine-project.org'] = 'wiki';

  $current = $sf_request->getParameter('current_menu_item');

  foreach ($links as $route => $name)
  {
    $class = $current == $name || $sf_request->getParameter('slug') == $name ? 'current':'';

    echo '<li>' . link_to($name, $route, array('class' => $class, 'target' => '_top')) . '</li>';
  }
  ?>
</ul>
