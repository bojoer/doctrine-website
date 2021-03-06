<?php

/**
 * BaseBlogPostTag
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $blog_post_id
 * @property integer $tag_id
 * @property BlogPost $BlogPost
 * @property Tag $Tag
 * 
 * @method integer     getBlogPostId()   Returns the current record's "blog_post_id" value
 * @method integer     getTagId()        Returns the current record's "tag_id" value
 * @method BlogPost    getBlogPost()     Returns the current record's "BlogPost" value
 * @method Tag         getTag()          Returns the current record's "Tag" value
 * @method BlogPostTag setBlogPostId()   Sets the current record's "blog_post_id" value
 * @method BlogPostTag setTagId()        Sets the current record's "tag_id" value
 * @method BlogPostTag setBlogPost()     Sets the current record's "BlogPost" value
 * @method BlogPostTag setTag()          Sets the current record's "Tag" value
 * 
 * @package    doctrine_website
 * @subpackage model
 * @author     Jonathan H. Wage
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseBlogPostTag extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('blog_post_tag');
        $this->hasColumn('blog_post_id', 'integer', 4, array(
             'type' => 'integer',
             'primary' => true,
             'length' => 4,
             ));
        $this->hasColumn('tag_id', 'integer', 4, array(
             'type' => 'integer',
             'primary' => true,
             'length' => 4,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('BlogPost', array(
             'local' => 'blog_post_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('Tag', array(
             'local' => 'tag_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));
    }
}